#!/data1/anaconda3/bin/python
import argparse
from multiprocessing import Pool
import numpy as np
from scipy import stats


def setArgs():
	parser = argparse.ArgumentParser(description="Computing score of eccDNA")
	parser.add_argument('--table', help='hits stat file', type=str, required=True)
	parser.add_argument('--out_f', help='output filename', type=str, required=True)
	parser.add_argument('--chromosome', help="The column number of the chromosome in the data file, default is 1 ", type=int, default=1)
	parser.add_argument('--hits', help="The column number of the hits number, default is 5 ", type=int, default=5)
	parser.add_argument('--ecc', help="The column number of the eccDNA, default is 4 ", type=int, default=4)
	parser.add_argument('--by_chr', help='Whether to process according to different chromosomes', action="store_true")
	parser.add_argument('--head', help='Whether to delete the first line of the file', action="store_true")
	return parser.parse_args()


def get_score(chromo, taxonomy, idx, idx2, idx3):
	# running
	records = [line for line in taxonomy if line[idx] == chromo]
	hits = [int(line[idx2])+1 for line in records]
	y, lambda0 = stats.boxcox(hits)
	u = np.mean(y)
	sd = np.std(y)
	print("染色体: %s, 记录数: %d, 参数lambda: %f, 正态分布均值: %f, 正态分布标准差: %f" % (chromo, len(records), lambda0, u,sd))
	res = []
	for i in range(len(records)):
		k = y[i]
		p = stats.norm.sf(k, u, sd) #reverse is stats.norm.cdf(k, u, sd)
		rel = [records[i][idx3], chromo, records[i][idx2], k, u, sd, p]
		res.append(rel)
	return res


def get_score_1(chromo, taxonomy, idx, idx2, idx3):
	# running
	records = [line for line in taxonomy if line[idx] in chromos]
	hits = [int(line[idx2])+1 for line in records]
	y, lambda0 = stats.boxcox(hits)
	u = np.mean(y)
	sd = np.std(y)
	print("染色体: %s, 记录数: %d, 参数lambda: %f, 正态分布均值: %f, 正态分布标准差: %f" % ('all', len(records), lambda0, u,sd))
	res = []
	for i in range(len(records)):
		k = y[i]
		p = stats.norm.sf(k, u, sd) #reverse is stats.norm.cdf(k, u, sd)
		rel = [records[i][idx3], 'all', records[i][idx2], k, u, sd, p]
		res.append(rel)
	return res


if __name__ == "__main__":
	## 获得参数
	args = setArgs()
	##get result
	with open(args.table) as f: taxonomy = [l.strip().split('\t') for l in f]
	if args.head: del taxonomy[0]
	idx, idx2, idx3 = args.chromosome - 1, args.hits - 1, args.ecc - 1
	#print(idx, idx2, idx3)
	#chromos = set([line[idx] for line in taxonomy])
	chromos = ['chr'+str(i) for i in range(1,23)]
	chromos.extend(['chrX', 'chrY'])
	if args.by_chr:
		p = Pool()
		multi_res = [p.apply_async(get_score, args = (chromo, taxonomy, idx, idx2, idx3)) for chromo in chromos]
		p.close() # 关闭进程池
		p.join() # 主进程等待所有进程执行完毕
		#summarise score
		with open(args.out_f, 'w') as f:
			for res in multi_res:
				result = res.get()
				#for l in result: f.write('\t'.join(map(str, l)) + '\n')
				sf_probability = [l[6] for l in result]
				log_score = -np.log10(sf_probability)
				for i in range(len(result)):
					result[i].append(log_score[i])
					f.write('\t'.join(map(str, result[i])) + '\n')
	else:
		result = get_score_1(chromos, taxonomy, idx, idx2, idx3)
		#summarise score
		with open(args.out_f, 'w') as f:
			sf_probability = [l[6] for l in result]
			log_score = -np.log10(sf_probability)
			for i in range(len(result)):
				result[i].append(log_score[i])
				f.write('\t'.join(map(str, result[i])) + '\n')

