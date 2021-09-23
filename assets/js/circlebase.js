
function draw_regulatory(nodes, edges, dom_id, width=800, height=450){
  var svg = d3.select("#"+dom_id)
      .append("svg")
      .attr("width", width)
      .attr("height", height)
      
  var page_rank = nodes.map(function (d) {
      return parseFloat(d.page_rank)
  });
  
  var min = d3.min(page_rank);
  var max = d3.max(page_rank);
  
  var linear_linkDistance = d3.scale.linear()
                              .domain([min, max])
                              .range([100, 300]);

  var force = d3.layout.force()
          .nodes(nodes)		//指定节点数组
          .links(edges)		//指定连线数组
          .size([width,height])	//指定范围
          .linkDistance(150)	//指定连线长度
          .linkStrength(0.2)	//指定连接线的坚硬度，值的范围为[ 0 , 1 ]，值越大越坚硬。
          .charge(-300);	//相互之间的作用力是排斥还是吸引，默认值为-30。
          
  force.start();//开始作用

  //添加连线
  var svg_edges = svg.selectAll("line")
                  .data(edges)
                  .enter()
                  .append("line")
                  .style("stroke","#ccc")
                  .style("stroke-width",1);

  var color = d3.scale.category20();

  var linear = d3.scale.linear()
              .domain([min, max])
              .range([10, 30]);

  //tooltips
  var mytooltip = d3.select("body")
  .append("div")
  .attr("class","mytooltip")
  .style("opacity",0.0);

  //添加节点
  var svg_nodes = svg.selectAll("circle")
          .data(nodes)
          .enter()
          .append("circle")
          .attr("r", function(d){
              return linear(d.page_rank)
          })
          .style("fill",function(d,i){
              return color(i);
          })
          .call(force.drag)//使得节点能够拖动 
          .on('mouseover', function(d,i){
              mytooltip.html("PageRank: " +d.page_rank)
              .style("left", (d3.event.pageX) + "px")
              .style("top", (d3.event.pageY + 20) + "px")
              .style("opacity",1.0);
          })
          .on("mousemove",function(d){
              mytooltip.style("left", (d3.event.pageX) + "px")
                      .style("top", (d3.event.pageY + 20) + "px");
          })
          .on('mouseout', function(){
              mytooltip.style("opacity",0.0);
          })

  //添加描述节点的文字
  var svg_texts = svg.selectAll("text")
          .data(nodes)
          .enter()
          .append("text")
          .style("fill", "black")
          .attr("dx", 20)
          .attr("dy", 8)
          .text(function(d){
              return d.name;
          });


  force.on("tick", function(){//对于每一个时间间隔
      //更新连线坐标
      svg_edges.attr("x1",function(d){ return d.source.x; })
      .attr("y1",function(d){ return d.source.y; })
      .attr("x2",function(d){ return d.target.x; })
      .attr("y2",function(d){ return d.target.y; });

      //更新节点坐标
      svg_nodes.attr("cx",function(d){ return d.x; })
               .attr("cy",function(d){ return d.y; });

      //更新文字坐标
      svg_texts.attr("x", function(d){ return d.x; })
               .attr("y", function(d){ return d.y; });
  });
}

function draw_polar(data, my_title, dom_id){
    Highcharts.chart(dom_id, {
        chart: {
                polar: true,
                type: 'line'
        },
        title: {
                text: my_title,
                align: 'center',
                x: 0
        },
        credits:{
             enabled: false // 禁用版权信息
        },
        pane: {
                size: '85%'
        },
        xAxis: {
                categories: data.x,
                tickmarkPlacement: 'on',
                lineWidth: 0
        },
        yAxis: {
                gridLineInterpolation: 'polygon',
                lineWidth: 1,
                gridLineColor: '#C0C0C0',
                min: 0
        },
        legend: {
                enabled: false,
                align: 'right',
                verticalAlign: 'top',
                y: 70,
                layout: 'vertical'
        },
        series: [{
                name: data.name,
                color: 'rgba(186,60,61)',
                data: data.y,
                pointPlacement: 'on'
        }]
    });
}

$(document).ready(function(){

//form examples click event
$(".tip").on("click", function(){
$('#item').val($(this).text());
return false;
})

//examples search terms
$("a.examples").on("click", function(){
$("input:radio").prop("checked",false);
var search_type = $(this).attr("name");
//console.log(search_type);
$("input:radio[value='"+search_type+"']").prop("checked",true);
var terms = $(this).next().attr("name").replace(/;;/g,"\n");
//console.log(terms);
$('#search-terms').val(terms);
})

//quick search process
$("form.quick").on('submit', function(){
var item = $(this).find("input").val().trim().replace(/\s/g, "");
if(item == ""){alert("search term can not be null");return false;}
})

//batch search process
$('#batch-search').on('submit', function(){
//check query type
if(!$('input:radio:checked').val()){
  alert('Please choose a query type corresponding the input terms');
  return false;
}
//check query terms
var item = $("#search-terms").val().trim().replace(/\s/g, "");
if(item == ""){alert("search term can not be null");return false;}
})

//初始化表格
$("#batch-result-table").DataTable({
    "scrollX": true,
    "dom": '<".col-md-4"l><".col-md-4"B><".col-md-4"f>t<".col-md-6"i><".col-md-6"p>',
    "order": [[2, "desc"]],
    "lengthMenu": [ [10, 20, 40, 60, 100, -1],[10,20, 40,60,100,"All"] ],
    "buttons": [
      'copy', 'excel', 'csv'
    ]
});



if ($("#hits_picture").length > 0) {
    var eccDNA =  $('#keyword').text().trim()
    $.ajax({
        async: true,
        cache: false,
        data:{"eccDNA": eccDNA},
        type : 'POST',
        dataType: "json",
        url : 'ajax/eccdna_score',
        beforeSend: function () {
            $("#hits_picture").html("<img src='assets/img/load.gif' alt='oops'/>");
            $("#raw_score_picture").html("<img src='assets/img/load.gif' alt='oops'/>");
            $("#normalized_score_picture").html("<img src='assets/img/load.gif' alt='oops'/>");
        }, 
        success: function (res) {
            console.log(res);
            var sources = res.hits.map( function(x){return(x.source)} )
            var hits = res.hits.map( function(x){return(parseInt(x.hits))} )
            console.log(sources)
            console.log(hits)
            draw_polar({'x':sources, 'y':hits, 'name':"hits number"}, 'Hits number from six annotation sections', 'hits_picture')
            var sources = res.score.map( function(x){return(x.source)} )
            var raw_score = res.score.map( function(x){return(parseFloat(x.row_score))} )
            console.log(sources)
            console.log(raw_score)
            draw_polar({'x':sources, 'y':raw_score, 'name':"raw score"}, 'Raw score of six annotation sections', 'raw_score_picture')
            var normalized_score = res.score.map( function(x){return(parseFloat(x.normalized_score))} )
            console.log(normalized_score)
            draw_polar({'x':sources, 'y':normalized_score, 'name':"normalized score"}, 'Normalized score of six annotation sections', 'normalized_score_picture')
        },
        error: function() {
            $("#hits_picture").html("sorry, something is wrong");
            $("#raw_score_picture").html("sorry, something is wrong");
            $("#normalized_score_picture").html("sorry, something is wrong");
        }
    });
}



//detail page table generation
$("div.detail_div").each(function(i, ele){
  var eccDNA =  $('#keyword').text().trim()
  var table = $(this).attr('id');
  var sql = $(this).find('p.hidden-info').text().trim();
  //console.log("table is : ", table);
  //console.log("sql is : ", sql);
  //console.log("element is : ", ele);
  //return true;
  
  setTimeout(function(){
     $.ajax({
          async: true,
          timeout:240000,
          data: {'sql':sql, 'table':table, "eccDNA":eccDNA},
          type : 'POST',
          url : 'ajax/table',
          beforeSend: function(){$(ele).html("<img src='assets/img/load.gif' alt='oops'/>");},
          success: function(response){
                  $(ele).html(response);
                  //detail page tables init of DataTable
                  $(ele).find("table.detail-table").DataTable({
                      "scrollX": true,
                      //当处理大数据时，延迟渲染数据，有效提高Datatables处理能力
                      "deferRender": true,
                      "dom": '<".col-md-4"l><".col-md-4"B><".col-md-4"f>t<".col-md-4"i><".col-md-8"p>',
                      "buttons": [
                          'copy', 'excel', 'csv'
                      ]
                      ,"autoWidth": false
                  });
          },
          error: function(jqXHR, textStatus, errorThrown) {
              if(textStatus=="timeout"){
                  $(ele).html("Loading timed out, please refresh the page");
              }else{
                  $(ele).html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
              }
          }
      })
    }, (i)*100 );
})




$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
   //当切换tab时，强制重新计算列宽
   $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
} );

////tab menu
$('.myTab a').click(function (e) {
e.preventDefault()
$(this).tab('show')
})

//toggleClass
$("#outer-tab-content").on("click", "p.section-title > button", function(){
$(this).children(".glyphicon").toggleClass("glyphicon-minus");
$(this).children(".glyphicon").toggleClass("glyphicon-plus");
$(this).parent().next().slideToggle("slow");
})

// $(".tab-content-second").on("click", "p.section-title > button", function(){
// $(this).children(".glyphicon").toggleClass("glyphicon-minus");
// $(this).children(".glyphicon").toggleClass("glyphicon-plus");
// $(this).parent().next().slideToggle("slow");
// })



//ajax to load network data
if ($("#Network").length > 0) {
  var eccDNA =  $('#keyword').text().trim()
  $.ajax({
      async: true,
      data:{"eccDNA":eccDNA},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/network',
      beforeSend: function () {$("#Network").html("<img src='assets/img/load.gif' alt='oops'/>");}, 
      success: function (data) {
          console.log(data);
          if(data.nodes.length == 0){
              $('#Network').html("No data available");
          }else{
              $("#Network").empty();
              $('#Network').append("<div class='col-md-6'><br><table class='table table-bordered table-striped' width='100%' id='page_rank_table'></table></div>")
              $('#page_rank_table').DataTable( {
                  "data": data.rows,
                  "columns": [
                      { "title": "eccDNA" },
                      { "title": "Gene" },
                      { "title": "Weight" },
                      { "title": "Source" },
                      { "title": "PageRank_eccDNA" },
                      { "title": "PageRank_Gene" }
                  ],
                  "scrollX": true,
                  "dom": '<".col-md-4"l><".col-md-4"B><".col-md-4"f>t<".col-md-4"i><".col-md-8"p>',
                  "buttons": [
                      'copy', 'excel', 'csv'
                  ]
              })

              $('#Network').append("<div class='col-md-6'><br><p class='alert alert-warning'>The interacting genes with the eccDNA are ranked by Google PageRank and the size of the circle is positively correlated with the PageRank score.</p><div id='page_rank_regulatory'></div></div>")
              if(data.nodes.length < 30)
                  draw_regulatory(data.nodes, data.edges, 'page_rank_regulatory');
              else
                  draw_regulatory(data.nodes, data.edges, 'page_rank_regulatory', 1000, 700);
          }
      },
      error: function() {
          $("#Network").html("sorry, something is wrong")
      }
  })
}

//ajax to load Enrichment info
if ($("#Enrichment").length > 0) {
  var eccDNA = $('#keyword').text().trim()
  $.ajax({
      async: true,
      timeout:200000,
      data:{"eccDNA":eccDNA},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/enrichment',
      beforeSend: function () {$("#Enrichment").html("<img src='assets/img/load.gif' alt='oops'/>");}, 
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $('#Enrichment').html(data.html);
          }else{
              $('#Enrichment').html("<h3>No data available</h3>");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
          if(textStatus=="timeout"){
              $("#Enrichment").html("Loading timed out, please try again");
          }else{
              $("#Enrichment").html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
          }
      }
  })
}


if($("#Targeting_genes_biocircos").length > 0 ){
  var eccDNA_region = $('#eccDNA_region').text().trim()
  var eccDNA = $('#keyword').text().trim()
  $.ajax({
      async: true,
      timeout:120000,
      data:{"eccDNA":eccDNA, "eccDNA_region":eccDNA_region, "circos_type":"ARC", "tables":['Targeting_genes_GeneHancer', 'Targeting_genes_JEME', 'Targeting_genes_VARAdb']},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/biocircos',
      beforeSend: function(){$("#Targeting_genes_biocircos").html("<img src='assets/img/load.gif' alt='oops'/>")},
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $("#Targeting_genes_biocircos").html(data.html_src)
          }else{
              $("#Targeting_genes_biocircos").html("<h3>"+data.info+"</h3>");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
          if(textStatus=="timeout"){
              $("#Targeting_genes_biocircos").html("Loading timed out, please try again");
          }else{
              $("#Targeting_genes_biocircos").html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
          }
      }
  });
}


if($("#Regulatory_element_biocircos").length > 0 ){
  var eccDNA_region = $('#eccDNA_region').text().trim()
  var eccDNA = $('#keyword').text().trim()
  $.ajax({
      async: true,
      timeout:120000,
      data:{"eccDNA":eccDNA, "eccDNA_region":eccDNA_region, "circos_type":"ARC", "tables":['Regulatory_element_dbSUPER', 'Regulatory_element_EnhancerAtlas', 'Regulatory_element_SEA', 'Regulatory_element_SEdb', 'Regulatory_element_ChromHMM']},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/biocircos',
      beforeSend: function(){$("#Regulatory_element_biocircos").html("<img src='assets/img/load.gif' alt='oops'/>")},
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $("#Regulatory_element_biocircos").html(data.html_src);
          }else{
              $("#Regulatory_element_biocircos").html("<h3>"+data.info+"</h3>");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
            if(textStatus=="timeout"){
                $("#Regulatory_element_biocircos").html("Loading timed out, please try again");
            }else{
                $("#Regulatory_element_biocircos").html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
            }
        }
  });
}



if($("#Chromatin_interaction_biocircos").length > 0 ){
  var eccDNA_region = $('#eccDNA_region').text().trim()
  var eccDNA = $('#keyword').text().trim()
  $.ajax({
      async: true,
      timeout:120000,
      data:{"eccDNA":eccDNA,  "eccDNA_region":eccDNA_region, "circos_type":"LINK", "tables":['Chromatin_interaction_EpiTensor', 'Chromatin_interaction_4DGenome','Chromatin_interaction_ENCODE']},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/biocircos',
      beforeSend: function(){$("#Chromatin_interaction_biocircos").html("<img src='assets/img/load.gif' alt='oops'/>")},
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $("#Chromatin_interaction_biocircos").html(data.html_src);
          }else{
              $("#Chromatin_interaction_biocircos").html("<h3>"+data.info+"</h3>");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
            if(textStatus=="timeout"){
                $("#Chromatin_interaction_biocircos").html("Loading timed out, please try again");
            }else{
                $("#Chromatin_interaction_biocircos").html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
            }
        }
  });
}


if($("#Chromatin_access_biocircos").length > 0 ){
  var eccDNA_region = $('#eccDNA_region').text().trim()
  var eccDNA = $('#keyword').text().trim()
  $.ajax({
      async: true,
      timeout:120000,
      data:{"eccDNA":eccDNA, "eccDNA_region":eccDNA_region, "circos_type":"ARC", "tables":['Chromatin_access_ATACdb', 'Chromatin_access_Cistrome', 'Chromatin_access_TCGA_ATAC', 'Chromatin_access_ENCODE_DHS']},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/biocircos',
      beforeSend: function(){$("#Chromatin_access_biocircos").html("<img src='assets/img/load.gif' alt='oops'/>")},
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $("#Chromatin_access_biocircos").html(data.html_src);
          }else{
              $("#Chromatin_access_biocircos").html("<h3>"+data.info+"</h3>");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
            if(textStatus=="timeout"){
                $("#Chromatin_access_biocircos").html("Loading timed out, please try again");
            }else{
                $("#Chromatin_access_biocircos").html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
            }
        }
  });
}


if($("#Epigenetic_regulation_biocircos").length > 0 ){
  var eccDNA_region = $('#eccDNA_region').text().trim()
  var eccDNA = $('#keyword').text().trim()
  $.ajax({
      async: true,
      timeout:120000,
      data:{"eccDNA":eccDNA, "eccDNA_region":eccDNA_region, "circos_type":"ARC", "tables":['Epigenetic_regulation_TFBS_HM', 'Epigenetic_regulation_HM_ENCODE', 'Epigenetic_regulation_HM_RoadMap']},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/biocircos',
      beforeSend: function(){$("#Epigenetic_regulation_biocircos").html("<img src='assets/img/load.gif' alt='oops'/>")},
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $("#Epigenetic_regulation_biocircos").html(data.html_src);
          }else{
              $("#Epigenetic_regulation_biocircos").html("<h3>"+data.info+"</h3>");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
            if(textStatus=="timeout"){
                $("#Epigenetic_regulation_biocircos").html("Loading timed out, please try again");
            }else{
                $("#Epigenetic_regulation_biocircos").html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
            }
      }
  });
}


if($("#Genetic_variants_biocircos").length > 10 ){
  var eccDNA_region = $('#eccDNA_region').text().trim()
  var eccDNA = $('#keyword').text().trim()
  $.ajax({
      async: true,
      timeout:120000,
      data:{"eccDNA":eccDNA, "eccDNA_region":eccDNA_region, "circos_type":"SNP", "tables":['Gene4Denovo', 'dbSNP', 'GTEx_eQTLs','GWAS_Catalog', 'GWASdb','variants','PancanQTL', 'gnomad_exomes']},
      type : 'POST',
      dataType: "json",
      url : 'Ajax/biocircos',
      beforeSend: function(){$("#Genetic_variants_biocircos").html("<img src='assets/img/load.gif' alt='oops'/>")},
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $("#Genetic_variants_biocircos").empty()
              $("#Genetic_variants_biocircos").append("<br><br>");
              $("#Genetic_variants_biocircos").append("<iframe id='BioCircos_View_SVG' src='"+data.html_src+"' height='700' width='100%'></iframe>");
          }else{
              $("#Genetic_variants_biocircos").html("<h3>"+data.info+"</h3>");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
            if(textStatus=="timeout"){
               $("#Genetic_variants_biocircos").html("Loading timed out, please try again");
            }else{
               $("#Genetic_variants_biocircos").html("<h3>Error, something is wrong</h3>"+"<h3>"+textStatus+"</h3>");
            }
        }
  });
}



$("#biocircos_view_query").on('submit', function(){
  var eccDNA_region = $('#eccDNA_region').text().trim()
  var eccDNA = $('#keyword').text().trim()
  //add paras
  var formData = new FormData($("#biocircos_view_query")[0]);
  formData.append("eccDNA_region", eccDNA_region);
  formData.append("eccDNA", eccDNA);
  console.log("formData: ",formData);
  //submit query
  $.ajax({
      async: true,
      timeout:120000,
      data:formData,
      processData : false, //// 告诉jQuery不要去处理发送的数据，用于对data参数进行序列化处理 这里必须false
      contentType : false, //// 告诉jQuery不要去设置Content-Type请求头
      type : 'POST',
      dataType: "json",
      url : 'Ajax/biocircos_update',
      beforeSend: function(){$("#BioCircos_View_result").html("<img src='assets/img/load.gif' alt='oops'/>")},
      success: function (data) {
          console.log(data);
          if(data.flag == 'success'){
              $("#BioCircos_View_result").empty()
              var html_src = 'assets/circosJS/biocircos/'+eccDNA+'/circlebase.html'
              $("#BioCircos_View_result").append("<iframe id='BioCircos_View_SVG' src='"+html_src+"' height='700' width='100%'></iframe>");
          }else{
              $("#BioCircos_View_result").html("<h3>sorry, please try again</h3>");
          }
      },
      error: function() {
          $("#BioCircos_View_result").html("sorry, something is wrong");
      }
  });
  return false;
})



// active tooltip tool
var options = {
selector: "[data-toggle=tooltip]", 
container: 'body',
placement:"auto",
html:true
}
$("body").tooltip(options);



//stat page charts
if ($("#container_cell_line").length > 0) {
Highcharts.chart('container_cell_line', {
  chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
  },
  title: {
      text: 'eccDNA distribution by cell line'
  },
  credits:{
     enabled: false // 禁用版权信息
  },
  tooltip: {
      pointFormat: '<b>{point.percentage:.2f}%</b>'
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.2f} %',
              style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
              }
          }
      }
  },
  series: [{
      name: 'cell line',
      colorByPoint: true,
      data: [
            {name: "ES2", y:27.094, sliced: true, selected: true}
            ,{name: "LnCap", y:20.021}
            ,{name: "U937", y:16.411}
            ,{name: "OVCAR8", y:13.659}
            ,{name: "C4-2", y:9.745}
            ,{name: "HeLaS3", y:9.190}
            ,{name: "PC-3", y:3.466}
            ,{name: "C4-2B", y:0.291}
            ,{name: "K562", y:0.032}
            ,{name: "PC3", y:0.019}
            ,{name: "Others", y:0.072}
        ]
  }]
});
}


if ($("#container_cell_type").length > 0) {
Highcharts.chart('container_cell_type', {
  chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
  },
  title: {
      text: 'eccDNA distribution by cell group'
  },
  credits:{
     enabled: false // 禁用版权信息
  },
  tooltip: {
      pointFormat: '<b>{point.percentage:.2f}%</b>'
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.2f} %',
              style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
              }
          }
      }
  },
  series: [{
      name: 'cell group',
      colorByPoint: true,
      data: [{name: 'Cancer cell line', y: 70.373, sliced: true, selected: true}
            ,{name: "Healthy person", y:28.546}
            ,{name: "Cancer tissue", y:1.081}
        ]
  }]
});
}


if ($("#container_tissue").length > 0) {
Highcharts.chart('container_tissue', {
  chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
  },
  title: {
      text: 'eccDNA distribution by tissue'
  },
  credits:{
     enabled: false // 禁用版权信息
  },
  tooltip: {
      pointFormat: '<b>{point.percentage:.2f}%</b>'
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.2f} %',
              style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
              }
          }
      }
  },
  series: [{
      name: 'tissue',
      colorByPoint: true,
      data: [
        {name: "Muscle", y:76.682, sliced: true, selected: true}
        ,{name: "Plasma", y:19.632}
        ,{name: "Connective tissue", y:0.527}
        ,{name: "Brain", y:0.423}
        ,{name: "Breast", y:0.400}
        ,{name: "Esophagus", y:0.364}
        ,{name: "Lung", y:0.336}
        ,{name: "Skin", y:0.244}
        ,{name: "Stomach", y:0.240}
        ,{name: "Bladder", y:0.203}
        ,{name: "Others", y:0.949}
      ]
  }]
});
}

if ($("#container_library_type").length > 0) {
Highcharts.chart('container_library_type', {
  chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
  },
  title: {
      text: 'eccDNA distribution by library type'
  },
  credits:{
     enabled: false // 禁用版权信息
  },
  tooltip: {
      pointFormat: '<b>{point.percentage:.2f}%</b>'
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.2f} %',
              style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
              }
          }
      }
  },
  series: [{
      name: 'library type',
      colorByPoint: true,
      data: [
        {name: "WGS", y:71.046, sliced: true, selected: true}
        ,{name: "Circle-Seq", y:24.220}
        ,{name: "cf-eccDNA-seq", y:4.324}
        ,{name: "ATAC-seq", y:0.297}
        ,{name: "Others", y:0.113}
      ]
  }]
});
}

});

