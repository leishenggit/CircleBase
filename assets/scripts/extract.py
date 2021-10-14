#!/data1/anaconda3/bin/python
import argparse


def setArgs():
	parser = argparse.ArgumentParser(description="Extracts the rows specified in the first file based on the associated columns in the two files")
	parser.add_argument("file",help="input file one ")
	field_group = parser.add_mutually_exclusive_group(required=True)
	field_group.add_argument('--field', help='keywords', type=str, nargs="+")
	field_group.add_argument('--field_f', help='file include keywords', type=str)
	parser.add_argument("--col1",help="column of keyword in file one default is 1", type=int, default=1)
	parser.add_argument("--col2",help="column of keyword in file two default is 1", type=int, default=1)
	parser.add_argument('--reverse', help='outputs data other than the specified keyword', action="store_true")
	parser.add_argument('--head', help='Whether to delete the first line of the file one', action="store_true")
	return parser.parse_args()

if __name__ == "__main__":
	## 获得参数
	args = setArgs()
	idx1, idx2 = args.col1-1, args.col2-1
	try:
		if args.field:
			sample = args.field
		else:
			with open(args.field_f) as f: ids = [l.strip().split('\t')[idx2] for l in f]
			sample = list( set(ids) )
		with open(args.file) as f:
			if args.head: print(f.readline().strip())
			for line in f:
				l = line.strip().split('\t')
				if args.reverse:
					if l[idx1] not in sample: print('\t'.join(l))
				else:
					if l[idx1] in sample: print('\t'.join(l))
	except:
		exit()