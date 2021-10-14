library(org.Hs.eg.db)
library(clusterProfiler)
#library(DOSE)

Args <- commandArgs()

gene_f = Args[6]
res_dir = Args[7]

setwd(res_dir)

CaseGene = unique(read.table(gene_f, header=F)[,2])

if(length(CaseGene) <= 7 ){
    print('gene list is too small')
    q()
}


CaseGeneSet = bitr(CaseGene, fromType = 'SYMBOL', toType = 'ENTREZID',  OrgDb = org.Hs.eg.db)[, 'ENTREZID']
# keytypes(org.Hs.eg.db)

if(length(CaseGeneSet) >= 7 ){
    #KEGG enrichment
    kegg_res <- enrichKEGG(gene = CaseGeneSet,
                    pvalueCutoff=0.05,
                    qvalueCutoff=0.2,
                    pAdjustMethod = 'BH',
                    minGSSize = 10,
                    maxGSSize = 500,
                    organism = 'hsa')
    print("==================KEGG pathway==================")
    print(kegg_res)

    #res_m <- enrichMKEGG(gene = CaseGeneSet, organism = 'hsa')
    if(! is.null(kegg_res) && nrow(as.data.frame(kegg_res)) > 0){
        print("==================save KEGG pathway result==================")
        kegg_res <- setReadable(kegg_res, 'org.Hs.eg.db', 'ENTREZID')
        write.csv(as.data.frame(kegg_res), "KEGG-pathway-enrich.csv", quote = F, row.names =F)
        png("KEGG-pathway-enrich.png", width = 900, height = 700, units = "px")
        print(dotplot(kegg_res, showCategory=20))
        dev.off()
        
        pdf("KEGG-pathway-enrich.pdf",  width = 10, height = 8)
        print(dotplot(kegg_res, showCategory=20))
        dev.off()
    }
}



#GO enrichment
ego <- enrichGO(gene          = CaseGene,
                OrgDb         = org.Hs.eg.db,
                keyType = "SYMBOL",
                ont           = "CC",
                pAdjustMethod = "BH",
                pvalueCutoff  = 0.05,
                qvalueCutoff  = 0.2,
                minGSSize = 10,
                maxGSSize = 500)
print("==================CC==================")
print(ego)


if(! is.null(ego) && nrow(as.data.frame(ego)) > 0){
    print("==================save CC result==================")
    write.csv(as.data.frame(ego), "GO-enrich.CC.csv", quote = F, row.names =F)
    png("GO-enrich.CC.png", width = 900, height = 700, units = "px")
    print(dotplot(ego, showCategory=20))
    dev.off()
    
    pdf("GO-enrich.CC.pdf", width = 10, height = 8)
    print(dotplot(ego, showCategory=20))
    dev.off()
}



ego <- enrichGO(gene          = CaseGene,
                OrgDb         = org.Hs.eg.db,
                keyType = "SYMBOL",
                ont           = "MF",
                pAdjustMethod = "BH",
                pvalueCutoff  = 0.05,
                qvalueCutoff  = 0.2,
                minGSSize = 10,
                maxGSSize = 500)
print("==================MF==================")
print(ego)

if(! is.null(ego) && nrow(as.data.frame(ego)) > 0){
    print("==================save MF result==================")
    write.csv(as.data.frame(ego), "GO-enrich.MF.csv", quote = F, row.names =F)
    png("GO-enrich.MF.png", width = 900, height = 700, units = "px")
    print(dotplot(ego, showCategory=20))
    dev.off()
    
    pdf("GO-enrich.MF.pdf",  width = 10, height = 8)
    print(dotplot(ego, showCategory=20))
    dev.off()
}

ego <- enrichGO(gene          = CaseGene,
                OrgDb         = org.Hs.eg.db,
                keyType = "SYMBOL",
                ont           = "BP",
                pAdjustMethod = "BH",
                pvalueCutoff  = 0.05,
                qvalueCutoff  = 0.2,
                minGSSize = 10,
                maxGSSize = 500)
print("==================BP==================")
print(ego)

if(! is.null(ego) && nrow(as.data.frame(ego)) > 0){
    print("==================save BP result==================")
    write.csv(as.data.frame(ego), "GO-enrich.BP.csv", quote = F, row.names =F)
    png("GO-enrich.BP.png", width = 900, height = 700, units = "px")
    print(dotplot(ego, showCategory=20))
    dev.off()
    
    pdf("GO-enrich.BP.pdf",  width = 10, height = 8)
    print(dotplot(ego, showCategory=20))
    dev.off()
}


