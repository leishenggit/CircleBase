#!/data1/anaconda3/bin/python
import argparse
import math
import numpy as np
from scipy import stats

def normalize(a):
	return stats.zscore(a)

# 定义sigmoid函数
def sigmoid(z):
	return(1 / (1 + np.exp(-z)))


def setArgs():
	parser = argparse.ArgumentParser(description="scores normalization")
	parser.add_argument('table', help='input file', type=str)
	parser.add_argument('--score', help="score at which column, default is 1 ", type=int, default=1)
	parser.add_argument('--head', help='Whether to delete the first line of the file', action="store_true")
	return parser.parse_args()



if __name__ == "__main__":
	## 获得参数
	args = setArgs()
	with open(args.table) as f: taxonomy = [l.strip().split('\t') for l in f]
	if args.head: del taxonomy[0]
	idx = args.score - 1
	score1 = [float(l[idx]) for l in taxonomy]
	score = list(map(lambda x: 300 if math.isinf(x) else x, score1)) #for inf correction
	score_z = stats.zscore(score, nan_policy='omit')
	score_logic = list(map(sigmoid, score_z))
	for i in range(len(taxonomy)):
		taxonomy[i].append(score_z[i])
		taxonomy[i].append(score_logic[i])
		print('\t'.join(map(str, taxonomy[i])))