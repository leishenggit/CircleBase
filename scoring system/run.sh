#!/bin/bash
set -e

#Step-1: get the number of annotated hits (records) for each eccDNA in each regulatory category
for f in Chromatin_access.bed  Chromatin_interaction.bed  Epigenetic_regulation.bed  Genetic_variant.bed  Regulatory_elements.bed  Targeting_genes.bed
do
    echo "Starting bedtools intersect for $f"
    bedtools intersect -c  -a  eccDNA_core.hg19.bed -b $f > hits.stat.$f
    echo "Finish $f"
done


#Step-2: get score
for f in Chromatin_access.bed  Chromatin_interaction.bed  Epigenetic_regulation.bed  Genetic_variant.bed  Regulatory_elements.bed  Targeting_genes.bed
do
python boxcox.py --table hits.stat.$f --by_chr --out_f $f.score
done


#Step-3: logistic normalization
for f in Chromatin_access.bed  Chromatin_interaction.bed  Epigenetic_regulation.bed  Genetic_variant.bed  Regulatory_elements.bed  Targeting_genes.bed
do
python normalize.py $f.score --score 8 > $f.nor
done


#step-4: average of normalized scores
cat *.nor | awk -F'\t' -v OFS='\t' '{score[$1]+=$10;count[$1]++;}END{for(k in score)printf("%s\t%.10f\t%.10f\t%d\n", k, score[k]/count[k])}' > final.score.txt

