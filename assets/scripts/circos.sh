#!/bin/sh

#echo `pwd`
#exit
data_f=$2
js_src=$3
region_file=$4
innerRadius=$5
outerRadius=$6

if [ "$1" = "Chromatin_access_ATACdb.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $3,$4-min_pos,$5-min_pos,"#CCCCFF", "source: Chromatin_access_ATACdb<br>coordinate: "$3":"$4"-"$5}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Chromatin_access_Cistrome.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1,$2-min_pos,$3-min_pos,"green", "source: Chromatin_access_Cistrome<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Chromatin_access_ENCODE_DHS.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1,$2-min_pos,$3-min_pos,"blue", "source: Chromatin_access_ENCODE_DHS<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius  >> $js_src
elif [ "$1" = "Chromatin_access_TCGA_ATAC.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1,$2-min_pos,$3-min_pos,"purple", "source: Chromatin_access_TCGA_ATAC<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Regulatory_element_ChromHMM.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#CD8500", "source: Regulatory_element_ChromHMM<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Regulatory_element_dbSUPER.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "yellow", "source: Regulatory_element_dbSUPER<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Regulatory_element_EnhancerAtlas.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#99CC66", "source: Regulatory_element_EnhancerAtlas<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Regulatory_element_SEA.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#CC9999", "source: Regulatory_element_SEA<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Regulatory_element_SEdb.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#0099CC", "source: Regulatory_element_SEdb<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Targeting_genes_VARAdb.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#0099CC", "source: Targeting_genes_VARAdb<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Targeting_genes_GeneHancer.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#CC9999", "source: Targeting_genes_GeneHancer<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Targeting_genes_JEME.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#CD8500", "source: Targeting_genes_JEME<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Epigenetic_regulation_TFBS_HM.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#CD8500", "source: Epigenetic_regulation_TF<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Epigenetic_regulation_HM_ENCODE.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#0099CC", "source: Epigenetic_regulation_HM_ENCODE<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Epigenetic_regulation_HM_RoadMap.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, $3-min_pos, "#CC9999", "source: Epigenetic_regulation_HM_RoadMap<br>coordinate: "$1":"$2"-"$3}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py ARC $data_f.format $innerRadius $outerRadius >> $js_src
elif [ "$1" = "Chromatin_interaction_4DGenome.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR && $1==$4{print "source: Chromatin_interaction_4DGenome<br>coordinate: "$1":"$2"-"$3"---"$4":"$5"-"$6, $1, $2-min_pos,$3-min_pos,$7, $4,$5-min_pos,$6-min_pos,$8}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py LINK $data_f.format "#FF5600" $innerRadius >> $js_src
elif [ "$1" = "Chromatin_interaction_ENCODE.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR && $1==$4{a=$1"-"$2":"$3; b=$4"-"$5":"$6; print "source: Chromatin_interaction_ENCODE<br>coordinate: "$1":"$2"-"$3"---"$4":"$5"-"$6, $1,$2-min_pos,$3-min_pos,a, $4,$5-min_pos,$6-min_pos,b}'  $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py LINK $data_f.format "#0D58A6" $innerRadius >> $js_src
elif [ "$1" = "Chromatin_interaction_EpiTensor.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR && $1==$4{if($9!="-"){split($9,arr,":");a=arr[2];}else{a="NA"} if($10!="-"){split($10, arr,":");b=arr[2];}else{b="NA"} print "source: OncoBase<br>coordinate:"$1":"$2"-"$3"---"$4":"$5"-"$6, $1,$2-min_pos,$3-min_pos,a, $4,$5-min_pos,$6-min_pos,b}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py LINK $data_f.format "#53DF00" $innerRadius >> $js_src
elif [ "$1" = "dbSNP.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1,$2-min_pos, int(20 *rand()) + 1, "dbSNP|"$6}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#99CCFF" >> $js_src
elif [ "$1" = "Gene4Denovo.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1,$2-min_pos, int(20 *rand()) + 1, "Gene4Denovo: "$6}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#FFCC33" >> $js_src
elif [ "$1" = "gnomad_exomes.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $4, $5-min_pos, int(20 *rand()) + 1, "gnomad_exomes|"$9}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#FFFF33" >> $js_src
elif [ "$1" = "GTEx_eQTLs.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos,int(20 *rand()) + 1, "GTEx_eQTLs|"$5}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#CC9999" >> $js_src
elif [ "$1" = "GWAS_Catalog.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $5, $6-min_pos, int(20 *rand()) + 1, "GWAS_Catalog|"$9}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#FFFFCC" >> $js_src
elif [ "$1" = "GWASdb.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $2, $3-min_pos, int(20 *rand()) + 1, "GWASdb|"$1}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#6666CC"  >> $js_src
elif [ "$1" = "PancanQTL.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $3, $4-min_pos, int(20 *rand()) + 1, "PancanQTL|"$2}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#CC99CC" >> $js_src
elif [ "$1" = "variants.txt" ];then
    awk -F'\t' -v OFS='\t' 'NR==FNR{min_pos=$1; max_pos=$2;}NR>FNR{print $1, $2-min_pos, int(20 *rand()) + 1, "OncoBase|"$6}' $region_file $data_f | sort -u > $data_f.format
    assets/scripts/NGCircos_PrepareData.py SNP $data_f.format  $innerRadius $outerRadius "#FF6666" >> $js_src

elif [ "$1" = "circlebase.html" ];then
    chromosome=$2
    js_src=$3
    region_file=$4
    tracks=$5
    eccdna=$6
    eccdna_start_raw=$7
    eccdna_end_raw=$8
    length=`awk -F'\t' -v OFS='\t' '{print $2-$1+100;}' $region_file`
    scale=`awk -F'\t' -v OFS='\t' '{print int(($2-$1+100)/40);}' $region_file`
    eccdna_start=`awk -F'\t' -v OFS='\t' -v para=$7 '{print para-$1;}' $region_file`
    eccdna_end=`awk -F'\t' -v OFS='\t' -v para=$8 '{print para-$1;}' $region_file`
    html_src=$9
    innerRadius=${10}
    outerRadius=`expr $innerRadius + 15`
    cat assets/circosJS/biocircos/part_1.html > $html_src
    js=`basename $js_src`
    genomic_start_position=`awk -F'\t' -v OFS='\t' '{print $1;}' $region_file`
    #echo "<p>Note: genomic posititon start from $chromosome:$genomic_start_position</p>" >> $html_src
    echo "<script src='$js'></script>" >> $html_src
    echo "<script>
var NGCircosGenome = [[
    ['$chromosome' , $length]
]];
var my_scale = $scale

var ARC_eccdna = [ 'ARC_eccdna' , {
  innerRadius: $innerRadius,
  outerRadius: $outerRadius
} , [
  {chr: '$chromosome', start: '$eccdna_start', end: '$eccdna_end', color: 'red', des: 'eccDNA point', html:'name: $eccdna<br>coordinate: $chromosome:$eccdna_start_raw-$eccdna_end_raw'}
]];


NGCircos01 = new NGCircos(ARC_eccdna, $tracks, NGCircosGenome,{
    //Customize SVG
     target : 'NGCircos',
     svgWidth : 800,
     svgHeight : 600,
    
     svgClassName: 'circlebase',
      //Customize genome
      chrPad : 0.04,
     innerRadius: 256,
     outerRadius: 260,
     genomeFillColor: ['#999999'],
     genomeBorder : {
       'display' : true,
       'borderColor' : '#000',
       'borderSize' : 0.5
    },
     
     ticks : {
        display : true,
        len : 5,
        color : '#000',
        textSize : 8,
        textColor : '#000',
        scale : my_scale
     },
     genomeLabel : {
      'display' : false,
      'textSize' : 15,
      'textColor' : '#000',
      'dx' : 0.028,
      'dy' : '-0.55em'
    },
   
    //Customize Events ========
    //zoom event
    zoom : true,
    
     // Customize Events for ARC module
    ARCMouseEvent : true,
    ARCMouseClickDisplay : false,
    ARCMouseDownDisplay : false,
    ARCMouseEnterDisplay : false,
    ARCMouseLeaveDisplay : false,
    ARCMouseMoveDisplay: false,
    ARCMouseUpDisplay: false,
    
    ARCMouseOutDisplay: true,
    ARCMouseOutAnimationTime: 500,
    ARCMouseOutColor: 'none',
    ARCMouseOutArcOpacity: 1,
    ARCMouseOutArcStrokeColor:  'none',
    ARCMouseOutArcStrokeWidth: 0,
    
    ARCMouseOverDisplay : true,
    ARCMouseOverTooltipsSetting: 'custom',
    ARCMouseOverColor:'none',
    ARCMouseOverArcOpacity:1.0,
    ARCMouseOverArcStrokeColor: '#F26223',
    ARCMouseOverArcStrokeWidth: 3,
    
    //Customize Events for LINK module
    LINKMouseEvent: true,
    LINKMouseClickDisplay: false,
    LINKMouseDownDisplay: false,
    LINKMouseEnterDisplay: false,
    LINKMouseLeaveDisplay:false,
    LINKMouseMoveDisplay:false,
    LINKLabelDragEvent: false,
    LINKMouseUpDisplay:false,

    LINKMouseOverDisplay:true,
    LINKMouseOverTooltipsSetting: 'custom',
    LINKMouseOverStrokeColor: 'green',
    LINKMouseOverOpacity: 1,
    LINKMouseOverStrokeWidth: 3,
    
    LINKMouseOutDisplay:true,
    LINKMouseOutAnimationTime: 500,
    LINKMouseOutOpacity: 1,
    LINKMouseOutStrokeColor: 'none',
    LINKMouseOutStrokeWidth: 'none',
    
    //Customize Events for SNP module
    SNPMouseEvent : true,
    SNPMouseClickDisplay : false,
    SNPMouseDownDisplay : false,
    SNPMouseEnterDisplay : false,
    SNPMouseLeaveDisplay : false,
    SNPMouseMoveDisplay : false,
    SNPMouseUpDisplay : false,

    SNPMouseOutDisplay : true,
    SNPMouseOutAnimationTime : 500,
    SNPMouseOutColor : 'none',
    SNPMouseOutCircleSize : 2,
    SNPMouseOutCircleOpacity : 1.0,
    SNPMouseOutCircleStrokeColor : 'red',
    SNPMouseOutCircleStrokeWidth : 0,

    SNPMouseOverDisplay : true,
    SNPMouseOverTooltipsSetting :'custom',
    SNPMouseOverColor : 'red',
    SNPMouseOverCircleSize : 2,
    SNPMouseOverCircleOpacity : 1.0,
    SNPMouseOverCircleStrokeColor : '#F26223',
    SNPMouseOverCircleStrokeWidth : 3,

    //Customize Events for SCATTER module
    SCATTERMouseOverDisplay: true,
    SCATTERMouseOverTooltipsSetting :'custom',
    SCATTERMouseOverColor: 'none',
    SCATTERMouseOverCircleSize: 'none',
    SCATTERMouseOverCircleOpacity: 1,
    SCATTERMouseOverCircleStrokeColor: 'none',
    SCATTERMouseOverCircleStrokeWidth: 0,
    SCATTERMouseOutDisplay: true,
    SCATTERMouseOutColor: 'none',
    SCATTERMouseOutCircleSize: 'none',
    SCATTERMouseOutCircleOpacity: 1,
    SCATTERMouseOutCircleStrokeColor: 'none',
    SCATTERMouseOutCircleStrokeWidth: 0,
  });
  
  NGCircos01.draw_genome(NGCircos01.genomeLength);
  NGCircos01.draw_genome(NGCircos01.genomeLength2); // NGCircos2.js callback second time
  
</script>" >> $html_src
    cat assets/circosJS/biocircos/part_2.html >> $html_src
fi

