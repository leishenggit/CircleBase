#!/data1/anaconda3/bin/python
import argparse


#get min and max chromosome position from all input data
def get_min_max_pos(file, start_idx, end_idx):
	global min_pos
	global max_pos
	with open(file) as f:
		for line in f:
			l = line.strip().split('\t')
			a = int(l[start_idx])
			b = int(l[end_idx])
			min_pos = a if a < min_pos else min_pos
			max_pos = b if b > max_pos else max_pos


def setArgs():
	parser = argparse.ArgumentParser(description="Get the smallest and largest genomic coordinates in all input files")
	parser.add_argument('--Chromatin_access_ATACdb', help='Chromatin_access_ATACdb.txt input file', type=str)
	parser.add_argument('--Chromatin_access_Cistrome', help='Chromatin_access_Cistrome.txt input file', type=str)
	parser.add_argument('--Chromatin_access_ENCODE_DHS', help='Chromatin_access_ENCODE_DHS.txt input file', type=str)
	parser.add_argument('--Chromatin_access_TCGA_ATAC', help='Chromatin_access_TCGA_ATAC.txt input file', type=str)
	parser.add_argument('--Chromatin_interaction_4DGenome', help='Chromatin_interaction_4DGenome.txt input file', type=str)
	parser.add_argument('--Chromatin_interaction_ENCODE', help='Chromatin_interaction_ENCODE.txt input file', type=str)
	parser.add_argument('--Chromatin_interaction_EpiTensor', help='Chromatin_interaction_EpiTensor.txt input file', type=str)
	parser.add_argument('--dbSNP', help='dbSNP.txt input file', type=str)
	parser.add_argument('--Gene4Denovo', help='Gene4Denovo.txt input file', type=str)
	parser.add_argument('--gnomad_exomes', help='gnomad_exomes.txt input file', type=str)
	parser.add_argument('--GTEx_eQTLs', help='GTEx_eQTLs.txt input file', type=str)
	parser.add_argument('--GWAS_Catalog', help='GWAS_Catalog.txt input file', type=str)
	parser.add_argument('--GWASdb', help='GWASdb.txt input file', type=str)
	parser.add_argument('--PancanQTL', help='PancanQTL.txt input file', type=str)
	parser.add_argument('--variants', help='variants.txt input file', type=str)
	parser.add_argument('--Regulatory_element_ChromHMM', help='Regulatory_element_ChromHMM.txt input file', type=str)
	parser.add_argument('--Regulatory_element_dbSUPER', help='Regulatory_element_dbSUPER.txt input file', type=str)
	parser.add_argument('--Regulatory_element_EnhancerAtlas', help='Regulatory_element_EnhancerAtlas.txt input file', type=str)
	parser.add_argument('--Regulatory_element_SEA', help='Regulatory_element_SEA.txt input file', type=str)
	parser.add_argument('--Regulatory_element_SEdb', help='Regulatory_element_SEdb.txt input file', type=str)
	parser.add_argument('--Targeting_genes_GeneHancer', help='Targeting_genes_GeneHancer.txt input file', type=str)
	parser.add_argument('--Targeting_genes_JEME', help='Targeting_genes_JEME.txt input file', type=str)
	parser.add_argument('--Targeting_genes_VARAdb', help='Targeting_genes_VARAdb.txt input file', type=str)
	parser.add_argument('--Epigenetic_regulation_TFBS_HM', help='Epigenetic_regulation_TFBS_HM.txt input file', type=str)
	parser.add_argument('--Epigenetic_regulation_HM_ENCODE', help='Epigenetic_regulation_HM_ENCODE.txt input file', type=str)
	parser.add_argument('--Epigenetic_regulation_HM_RoadMap', help='Epigenetic_regulation_HM_RoadMap.txt input file', type=str)
	parser.add_argument('--min_pos', help='init min_pos', type=int, required=True)
	parser.add_argument('--max_pos', help='init max_pos', type=int, required=True)
	parser.add_argument('--out_f', help='Regulatory_element_SEdb.txt input file', type=str, required=True)
	return parser.parse_args()

if __name__ == "__main__":
	## 获得参数
	args = setArgs()
	##get chromosome start and end position
	min_pos = args.min_pos
	max_pos = args.max_pos
	##run to get max and min
	if args.Chromatin_access_ATACdb : get_min_max_pos(args.Chromatin_access_ATACdb, 3, 4)
	if args.Chromatin_access_Cistrome : get_min_max_pos(args.Chromatin_access_Cistrome, 1, 2)
	if args.Chromatin_access_ENCODE_DHS : get_min_max_pos(args.Chromatin_access_ENCODE_DHS, 1, 2)
	if args.Chromatin_access_TCGA_ATAC : get_min_max_pos(args.Chromatin_access_TCGA_ATAC, 1, 2)
	if args.Chromatin_interaction_4DGenome : get_min_max_pos(args.Chromatin_interaction_4DGenome, 1, 2)
	if args.Chromatin_interaction_4DGenome : get_min_max_pos(args.Chromatin_interaction_4DGenome, 4, 5)
	if args.Chromatin_interaction_ENCODE : get_min_max_pos(args.Chromatin_interaction_ENCODE, 1, 2)
	if args.Chromatin_interaction_ENCODE : get_min_max_pos(args.Chromatin_interaction_ENCODE, 4, 5)
	if args.Chromatin_interaction_EpiTensor : get_min_max_pos(args.Chromatin_interaction_EpiTensor, 1, 2)
	if args.Chromatin_interaction_EpiTensor : get_min_max_pos(args.Chromatin_interaction_EpiTensor, 4, 5)
	if args.dbSNP : get_min_max_pos(args.dbSNP, 1, 2)
	if args.Gene4Denovo : get_min_max_pos(args.Gene4Denovo, 1, 2)
	if args.gnomad_exomes : get_min_max_pos(args.gnomad_exomes, 4, 5)
	if args.GTEx_eQTLs : get_min_max_pos(args.GTEx_eQTLs, 1, 1)
	if args.GWAS_Catalog : get_min_max_pos(args.GWAS_Catalog, 5, 5)
	if args.GWASdb : get_min_max_pos(args.GWASdb, 2, 2)
	if args.PancanQTL : get_min_max_pos(args.PancanQTL, 3, 3)
	if args.Regulatory_element_ChromHMM : get_min_max_pos(args.Regulatory_element_ChromHMM, 1, 2)
	if args.Regulatory_element_dbSUPER : get_min_max_pos(args.Regulatory_element_dbSUPER, 1, 2)
	if args.Regulatory_element_EnhancerAtlas : get_min_max_pos(args.Regulatory_element_EnhancerAtlas, 1, 2)
	if args.Regulatory_element_SEA : get_min_max_pos(args.Regulatory_element_SEA, 1, 2)
	if args.Regulatory_element_SEdb : get_min_max_pos(args.Regulatory_element_SEdb, 1, 2)
	if args.variants : get_min_max_pos(args.variants, 1, 2)
	if args.Targeting_genes_GeneHancer : get_min_max_pos(args.Targeting_genes_GeneHancer, 1, 2)
	if args.Targeting_genes_JEME : get_min_max_pos(args.Targeting_genes_JEME, 1, 2)
	if args.Targeting_genes_VARAdb : get_min_max_pos(args.Targeting_genes_VARAdb, 1, 2)
	if args.Epigenetic_regulation_TFBS_HM : get_min_max_pos(args.Epigenetic_regulation_TFBS_HM, 1, 2)
	if args.Epigenetic_regulation_HM_ENCODE : get_min_max_pos(args.Epigenetic_regulation_HM_ENCODE, 1, 2)
	if args.Epigenetic_regulation_HM_RoadMap : get_min_max_pos(args.Epigenetic_regulation_HM_RoadMap, 1, 2)
	#output
	rel = [str(min_pos), str(max_pos)]
	with open(args.out_f,'w')as f:
		f.write('\t'.join(rel)+'\n')

