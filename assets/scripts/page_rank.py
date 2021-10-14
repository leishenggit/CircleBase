#!/data1/anaconda3/bin/python
import networkx as nx
import argparse

def buildGraph(edges, directed=False):
	if directed:
		G = nx.DiGraph()
	else:
		G = nx.Graph()
	G.add_weighted_edges_from(edges)
	return G

if __name__ == '__main__':
	parser = argparse.ArgumentParser()
	parser.add_argument('input', type=str, help='input file of edges')
	parser.add_argument('-d', '--direction', help='Whether the graph is directed', action="store_true")
	parser.add_argument('--head', help='Whether drop the first line', action="store_true")
	args = parser.parse_args()
	with open(args.input) as f: content = [l.strip().split('\t') for l in f]
	if args.head: del content[0]
	edges = [(l[0], l[1], float(l[2])) for l in content]
	if args.direction:
		G = buildGraph(edges, True)
	else:
		G = buildGraph(edges)
	pr_value = nx.pagerank(G, alpha=0.85)
	rel = [ [l[0], l[1], l[2], l[3], pr_value.get(l[0], 0), pr_value.get(l[1], 0)] for l in content]
	for l in sorted( rel, key=lambda x: (x[4]+x[5]) ):
		l[4], l[5] = str(l[4]), str(l[5])
		print(';'.join(l))

