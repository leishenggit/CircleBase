<br>
<br>
<div class="container-fluid"> 
<div class="col-md-10 col-md-offset-1">
<h3>Data sources used in CircleBase</h3>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
    <tbody>
        <tr class="success">
            <td colspan="3">
                <h5>Targeting genes sources</h5>
            </td>
        </tr>
        <tr>
            <td>
                VARAdb
            </td>
            <td>
                A comprehensive human variation annotation database, which aims to provide a large number of variations and annotate their potential roles with a large amount of regulatory information.
                The current version of VARAdb cataloged a total of 577,283,813 variations and provided annotation including motif changes, risk SNPs, LD SNPs, eQTLs, clinical variant-drug-gene pairs, sequence conservation, somatic mutations, etc.
            </td>
            <td>
                <a target="_blank" href="http://www.licpathway.net/VARAdb/index.php">http://www.licpathway.net/VARAdb/index.php</a>
            </td>
        </tr>
        
        <tr>
            <td>
                GeneHancer
            </td>
            <td>
                A novel database of human enhancers and their inferred target genes, in the framework of GeneCards. It integrated a total of 434 000 reported enhancers from four different genome-wide databases: the Encyclopedia of DNA Elements (ENCODE), the Ensembl regulatory build, the functional annotation of the mammalian genome (FANTOM) project and the VISTA Enhancer Browser.
            </td>
            <td>
                <a target="_blank" href="http://www.genecards.org/">http://www.genecards.org/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                JEME
            </td>
            <td>
                A new method for determining the target genes of transcriptional enhancers in specific cells and tissues. It combines global trends across many samples and sample-specific information, and considers the joint effect of multiple enhancers.
                In the paper, they reconstructed the enhancer–target networks in 935 samples of human primary cells, tissues and cell lines, which constitute by far the largest set of enhancer–target networks.
            </td>
            <td>
                <a target="_blank" href="https://www.nature.com/articles/ng.3950">https://www.nature.com/articles/ng.3950</a>
            </td>
        </tr>
        
        <tr class="success">
            <td colspan="3">
                <h5>Regulatory elements sources</h5>
            </td>
        </tr>
        <tr>
            <td>
                dbSUPER
            </td>
            <td>
                dbSUPER is the first integrated and interactive database of super-enhancers, which contains 82234 super-enhancers in 102 human and 25 mouse tissue/cell types.
            </td>
            <td>
                <a target="_blank" href="http://www.asntech.org/dbsuper/">http://www.asntech.org/dbsuper/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                EnhancerAtlas
            </td>
            <td>
                The database provides enhancer annotation in nine species, including human (hg19), mouse (mm9), fly (dm3), worm (ce10), zebrafish (danRer10), rat (rn5), yeast (sacCer3), chicken (galGal4), and boar (susScr3). The consensus enhancers were predicted based on multiple high throughput experimental datasets (e.g. histone modification, CAGE, GRO-seq, transcription factor binding and DHS). Currently, the updated database contains 13,494,603 enhancers for 586 tissue/cell types.
            </td>
            <td>
                <a target="_blank" href="http://enhanceratlas.org/">http://enhanceratlas.org/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                SEA
            </td>
            <td>
                SEA stores the predicted super-enhancers and enhancers of 11 species, expands the types of Cell/Tissue/Disease from 134 to 246 and includes experimentally identified and confirmed super-enhancers. It lists the functional compositional organization for each SE through Hi-C data based peak calling and provides the cell-type/tissue/disease specificity of super-enhancer with an quantitative entropy value.
            </td>
            <td>
                <a target="_blank" href="http://sea.edbc.org/">http://sea.edbc.org/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                SEdb
            </td>
            <td>
                Super enhancers are large clusters of enhancers with a higher degree of enrichment for TFs, higher levels of transcription and stronger cell type specificity. We downloaded 331,146 super enhancers from SEdb identified by H3K27ac ChIP-seq samples. 
            </td>
            <td>
                <a target="_blank" href="http://www.licpathway.net/sedb/">http://www.licpathway.net/sedb/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                ChromHMM
            </td>
            <td>
                ChromHMM is software for learning and characterizing chromatin states. ChromHMM can integrate multiple chromatin datasets such as ChIP-seq data of various histone modifications to discover de novo the major re-occuring combinatorial and spatial patterns of marks. ChromHMM is based on a multivariate Hidden Markov Model that explicitly models the presence or absence of each chromatin mark.
            </td>
            <td>
                <a target="_blank" href="http://compbio.mit.edu/ChromHMM/">http://compbio.mit.edu/ChromHMM/</a>
            </td>
        </tr>
        
        <tr class="success">
            <td colspan="3">
                <h5>Chromatin interaction sources</h5>
            </td>
        </tr>
        <tr>
            <td>
                ENCODE
            </td>
            <td>
                Physical interactions between distal regulatory elements have a key role in regulating gene expression, but the extent to which these interactions vary between cell types and contribute to cell-type-specific gene expression remains unclear.
                This study mapped cohesin-mediated chromatin loops, using chromatin interaction analysis by paired-end tag sequencing (ChIA-PET), and analysed gene expression in 24 diverse human cell types, including core ENCODE cell lines.
            </td>
            <td>
                <a target="_blank" href="https://www.nature.com/articles/s41586-020-2151-x">Landscape of cohesin-mediated chromatin loops in the human genome</a>
            </td>
        </tr>
        
        <tr>
            <td>
                4DGenome
            </td>
            <td>
                Records in 4DGenome are compiled through comprehensive literature curation of experimentally-derived and computationally-predicted interactions. The current release contains 4,433,071 experimentally-derived and 3,605,176 computationally-predicted interactions in 5 organisms.
            </td>
            <td>
                <a target="_blank" href="https://4dgenome.research.chop.edu/">https://4dgenome.research.chop.edu/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                OncoBase
            </td>
            <td>
                OncoBase employed EpiTensor to obtain 25 222 085 high-resolution (~200 bp) chromatin interactions, including 2847794, 5691699, and 16682592 interactions for promoter to promoter, enhancer to promoter and enhancer to enhancer, respectively.
            </td>
            <td>
                <a target="_blank" href="http://www.oncobase.biols.ac.cn/">http://www.oncobase.biols.ac.cn</a>
            </td>
        </tr>
        
        <tr class="success">
            <td colspan="3">
                <h5>Chromatin access sources</h5>
            </td>
        </tr>
        <tr>
            <td>
                 ATACdb
            </td>
            <td>
                ATACdb documented a total of 52,078,883 regions from over 1,400 chromatin accessibility ATAC-seq samples. These samples have been manually curated from more than 2,200 chromatin accessibility samples associated with ATAC-seq data from NCBI GEO/SRA database.
            </td>
            <td>
                <a target="_blank" href="http://www.licpathway.net/ATACdb/">http://www.licpathway.net/ATACdb/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                 Cistrome
            </td>
            <td>
                Open chromatin can be identified using ATAC-seq and Dnase-seq, which is reported to have multiple regulatory elements enriched and embed variations with regulation of distal gene resulting in heterogeneity. We cataloged accessible regions of 99 ATAC-seq samples from Cistrome.
            </td>
            <td>
                <a target="_blank" href="http://cistrome.org/">http://cistrome.org/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                TCGA_ATAC
            </td>
            <td>
                Open chromatin can be identified using ATAC-seq and Dnase-seq, which is reported to have multiple regulatory elements enriched and embed variations with regulation of distal gene resulting in heterogeneity. We cataloged accessible regions of ATAC-seq samples across 23 cancer types from The Cancer Genome Atlas (TCGA).
            </td>
            <td>
                <a target="_blank" href="https://portal.gdc.cancer.gov/">https://portal.gdc.cancer.gov/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                ENCODE_DHS
            </td>
            <td>
                Open chromatin can be identified using ATAC-seq and Dnase-seq, which is reported to have multiple regulatory elements enriched and embed variations with regulation of distal gene resulting in heterogeneity. We cataloged the accessible regions of 243 Dnase-seq samples from ENCODE.
            </td>
            <td>
                <a target="_blank" href="https://www.encodeproject.org/">https://www.encodeproject.org/</a>
            </td>
        </tr>
        
        <tr class="success">
            <td colspan="3">
                <h5>Epigenetic regulation sources</h5>
            </td>
        </tr>
        <tr>
            <td>
                TF(Transcription factor)
            </td>
            <td>
                We downloaded this data from VARAdb which collected a total of 7734 TF ChIP-seq samples from ENCODE, Remap, Cistrome, ChIP-Atlas and GTRD and obtained 761 TFs.
            </td>
            <td>
                <a target="_blank" href="http://www.licpathway.net/VARAdb/">http://www.licpathway.net/VARAdb/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                HM_ENCODE
            </td>
            <td>
                From ENCODE and Roadmap, we obtained histone modifications (H3K36me3, H3K4me1, H3K4me3, H3K79me2, H4K20me1 and H3K9ac) involved 686 ChIP-seq samples.
            </td>
            <td>
                <a target="_blank" href="https://www.encodeproject.org/">https://www.encodeproject.org/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                HM_Roadmap
            </td>
            <td>
                From ENCODE and Roadmap, we obtained histone modifications (H3K36me3, H3K4me1, H3K4me3, H3K79me2, H4K20me1 and H3K9ac) involved 686 ChIP-seq samples.
            </td>
            <td>
                <a target="_blank" href="http://www.roadmapepigenomics.org/">http://www.roadmapepigenomics.org/</a>
            </td>
        </tr>
        
        
        <tr class="success">
            <td colspan="3">
                <h5>Genetic variants and eQTL sources</h5>
            </td>
        </tr>
        <tr>
            <td>
                OncoBase
            </td>
            <td>
                The database collected somatic mutations from four databases, including 1823257 somatic mutations in 36 cancer types from TCGA, 77462290 somatic mutations in 84 cancer projects from ICGC, 21392393 somatic mutations from COSMIC, and 345849 clinical variants from ClinVar. In total, 81385242 somatic mutations in 68 cancer types from more than 120 cancer projects.
            </td>
            <td>
                <a target="_blank" href="http://www.oncobase.biols.ac.cn/">http://www.oncobase.biols.ac.cn</a>
            </td>
        </tr>
        
        
        <tr>
            <td>
                Gene4Denovo
            </td>
            <td>
                Gene4Denovo integrated 670,082 de novo mutations (DNMs), including 73,856 coding DNMs from 58,011 individuals, across 28 types of phenotypes.
            </td>
            <td>
                <a target="_blank" href="http://www.genemed.tech/gene4denovo/home">http://www.genemed.tech/gene4denovo/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                dbSNP
            </td>
            <td>
                We obtained variants from dbSNP v155 which contains human single nucleotide variations, microsatellites, and small-scale insertions and deletions along with publication, population frequency, molecular consequence, and genomic and RefSeq mapping information for both common variations and clinical mutations.
            </td>
            <td>
                <a target="_blank" href="https://www.ncbi.nlm.nih.gov/snp/">https://www.ncbi.nlm.nih.gov/snp/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                gnomAD
            </td>
            <td>
                The Genome Aggregation Database (gnomAD) is a resource developed by an international coalition of investigators, with the goal of aggregating and harmonizing both exome and genome sequencing data from a wide variety of large-scale sequencing projects, and making summary data available for the wider scientific community.
            </td>
            <td>
                <a target="_blank" href="https://gnomad.broadinstitute.org/">https://gnomad.broadinstitute.org/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                GTEx_eQTL
            </td>
            <td>
                The GTEx (Genotype-Tissue Expression) Project identified genetic variants that influence how genes are turned on and off in human tissues and organs. Genetic variants that influence how genes behave are called expression quantitative trait loci.
                We collected a total of 71478479 significant eQTL (FDR ≤ 0.05) in 49 human tissues from the GTEx project version 8.
            </td>
            <td>
                <a target="_blank" href="https://gtexportal.org/"> https://gtexportal.org/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                GWAS_Catalog
            </td>
            <td>
               Genome-wide association studies are providing a large number of data associating genetic variants with diseases and phenotypes. We collected 272608 risk SNPs associated with diseases or traits or phenotypes from The NHGRI-EBI Catalog of human genome-wide association studies (GWAS Catalog) v1.0.
            </td>
            <td>
                <a target="_blank" href="https://www.ebi.ac.uk/gwas/">https://www.ebi.ac.uk/gwas/</a>
            </td>
        </tr>
        
        <tr>
            <td>
                GWASdb
            </td>
            <td>
               Genome-wide association studies are providing a large number of data associating genetic variants with diseases and phenotypes. We collected 314239 risk SNPs associated with diseases or traits or phenotypes from GWASdb v2.0.
            </td>
            <td>
                <a target="_blank" href="https://academic.oup.com/nar/article/44/D1/D869/2503106">GWASdb v2: an update database for human genetic variants identified by genome-wide association studies</a>
            </td>
        </tr>
        
        <tr>
            <td>
                PancanQTL
            </td>
            <td>
               PancanQTL aims to comprehensively provide cis-eQTLs (SNPs affect local gene expression) and trans-eQTLs (SNPs affect distant gene expression) in 33 cancer types from The Cancer Genome Atlas (TCGA).
               We collected 5837775 significant eQTL-gene pairs in 33 cancer types from PancanQTL database.
            </td>
            <td>
                <a target="_blank" href="http://gong_lab.hzau.edu.cn/PancanQTL/">http://gong_lab.hzau.edu.cn/PancanQTL/</a>
            </td>
        </tr>
        
    </tbody>
  </table>
</div>


</div>
</div>
