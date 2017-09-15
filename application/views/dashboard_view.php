<html lang="en">

<!-- Mirrored from avenxo.kaijuthemes.com/ui-typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:09:25 GMT -->
<head>
    <meta charset="utf-8">
    <title>Dashboard -  Procurement System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="">


   <?php echo $_def_css_files; ?>

    <link type="text/css" href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link type="text/css" href="assets/plugins/datatables/dataTables.themify.css" rel="stylesheet">


    <style>
    html{
        zoom: 0.8;
        zoom: 80%;
    }

    #tbl_po_list{
        margin-top: 10px !important;
        border-top: 1px solid #aeaeae !important;
    }

    .data-container {
          border-radius: 5px;
        background: rgba(255, 255, 255, .1);
        padding: 10px;
    }

    .toolbar{
        float: left;
    }

    .btn-white {
        background: white none repeat scroll 0 0;
        border: 1px solid #e7eaec;
        color: inherit;
        text-transform: none;
    }

    td.details-control {
        background: url('assets/img/Folder_Closed.png') no-repeat center center;
        cursor: pointer;
    }
    tr.details td.details-control {
        background: url('assets/img/Folder_Opened.png') no-repeat center center;
    }

    .child_table{
        padding: 5px;
        border: 1px #ff0000 solid;
    }

    .glyphicon.spinning {
        animation: spin 1s infinite linear;
        -webkit-animation: spin2 1s infinite linear;
    }

    @keyframes spin {
        from { transform: scale(1) rotate(0deg); }
        to { transform: scale(1) rotate(360deg); }
    }

    @-webkit-keyframes spin2 {
        from { -webkit-transform: rotate(0deg); }
        to { -webkit-transform: rotate(360deg); }
    }

    </style>

    <link rel="stylesheet" type="text/css" href="assets/css/dark-theme.css">

    <style>

        .page-content {
            overflow-x: hidden!important;
        }
        @media (min-width: 768px){
          .seven-cols .col-md-1,
          .seven-cols .col-sm-1,
          .seven-cols .col-lg-1  {
            width: 100%;
            *width: 100%;
          }
        }

        @media (min-width: 992px) {
          .seven-cols .col-md-1,
          .seven-cols .col-sm-1,
          .seven-cols .col-lg-1 {
            width: 14.285714285714285714285714285714%;
            *width: 14.285714285714285714285714285714%;
          }
        }
         
        @media (min-width: 1200px) {
          .seven-cols .col-md-1,
          .seven-cols .col-sm-1,
          .seven-cols .col-lg-1 {
            width: 14.285714285714285714285714285714%;
            *width: 14.285714285714285714285714285714%;
          }
        }
    </style>



</head>

<body class="animated-content" style="font-family: tahoma;">

<?php echo $_top_navigation; ?>

<div id="wrapper">
        <div id="layout-static">
        <?php echo $_side_bar_navigation; ?>
        <div class="static-content-wrapper">
            <div class="static-content">
                    <div class="page-content"><!-- #page-content -->
                            <div data-widget-group="group1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default" style="overflow-x: hidden!important;"> 
                                            <div class="panel-body table-responsive">
                                                <div class="row" style="margin-top: 20px;">
                                                    <div class="col-xs-12 col-sm-12 <?php echo (in_array('7-1',$this->session->user_rights)?'':'hidden'); ?>">
                                                      <div class="data-container table-responsive" >
                                                            <table id="tbl_po_list" class="table custom-design" c width="100%">
                                                                <thead>
                                                                    <th></th>
                                                                    <th>PO #</th>
                                                                    <th>Vendor</th>
                                                                    <th>Terms </th>
                                                                    <th>Posted by </th>
                                                                    <th style="text-align: center;"> <i class="fa fa-paperclip"></i></th>
                                                                    <th><center>Action</center></th>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                      </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> <!-- #page-content -->
            </div>


            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">
                        <li><h6 style="margin: 0;">&copy; 2017</h6></li>
                    </ul>
                    <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                </div>
            </footer>




        </div>
        </div>


</div>


<?php echo $_switcher_settings; ?>
<?php echo $_def_js_files; ?>



<!-- Sparkline -->
<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- CHART -->
<script src="assets/plugins/chartJs/Chart.min.js"></script>

<!-- DATATABLE -->
<script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script>
var ctx = document.getElementById("salesChart").getContext('2d');
var ctxIE = document.getElementById("testChart").getContext('2d');

Chart.defaults.global.defaultFontColor = "#b7b7b7";

  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ["Jan","Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
          datasets: [
            {
              label: 'Income (Last Year)',
              data: <?php echo json_encode($previous_year_income_monthly); ?>,
              backgroundColor: [
                  'rgba(255, 152, 0, .1)'
              ],
              borderColor: [
                  'rgb(255, 152, 0)'
              ],
              borderWidth: 2
            },
            {
              label: 'Income (Current Year)',
              data: <?php echo json_encode($current_year_income_monthly); ?>,
              backgroundColor: [
                  'rgba(255, 255, 255, .1)'
              ],
              borderColor: [
                  'rgb(255, 255, 255)'
              ],
              borderWidth: 2
            }
          ]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });

  var iEChart = new Chart(ctxIE, {
      type: 'bar',
      data: {
          labels: ["Jan","Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
          datasets: [
            {
              label: 'Income (Current Year)',
              data: <?php echo json_encode($current_year_income_monthly); ?>,
              backgroundColor: [
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)',
                  'rgba(255, 152, 0, .2)'
              ],
              borderColor: [
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)',
                  'rgb(255, 152, 0)'              
              ],
              borderWidth: 2
            },
            {
              label: 'Expense (Current Year)',
              data: <?php echo json_encode($expense_monthly); ?>,
              backgroundColor: [
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)',
                  'rgba(255, 255, 255, .1)'
              ],
              borderColor: [
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)',
                  'rgb(255, 255, 255)'
              ],
              borderWidth: 2
            }
          ]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });

</script>

<script>
    var sparklineCharts = function(){
            $("#sparkline1").sparkline([10,30,20,20,30,40,50], {
                type: 'line',
                width: '100%',
                height: '40',
                lineColor: '#ff9800',
                fillColor: 'rgba(255, 152, 0, .1)',
                lineWidth: '3',
                spotColor: '#f44336',
                maxSpotColor: '#f44336',
                minSpotColor: '#f44336',
                highlightSpotColor: '#00007f',
                highlightLineColor: '#7f007f',
                normalRangeColor: '#0000bf',
                spotRadius: '0'
            });
    };

    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineCharts, 500);
    });

    sparklineCharts();
</script>

<script>

    $(document).ready(function(){
        var dt; var _selectedID; var _selectRowObj;

        var initializeControls=(function(){


            dt=$('#tbl_po_list').DataTable({
                "dom": '<"toolbar">frtip',
                "bLengthChange":false,
                "ajax" : "Purchases/transaction/po-for-approved",
                "language": {
                  "searchPlaceholder":"Search Purchase Order"
                },
                "columns": [
                    {
                        "targets": [0],
                        "class":          "details-control",
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ""
                    },
                    { targets:[1],data: "po_no" },
                    { targets:[2],data: "supplier_name" },
                    { targets:[3],data: "term_description" },
                    { targets:[4],data: "posted_by" },
                    {
                        targets:[5],data: "attachment",
                        render: function (data, type, full, meta){

                            return '<center>'+ data +' <i class="fa fa-paperclip"></i></classenter>';
                        }

                    },
                    {
                        targets:[6],
                        render: function (data, type, full, meta){
                            //alert(full.purchase_order_id);

                            var btn_approved='<button class="btn btn-success btn-sm" name="approve_po"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Approved this PO"><i class="fa fa-check" style="color: white;"></i> <span class=""></span></button>';
                            var btn_conversation='<a id="link_conversation" href="Po_messages?id='+full.purchase_order_id+'" target="_blank" class="btn btn-info btn-sm"  style="margin-right:0px;" data-toggle="tooltip" data-placement="top" title="Open Conversation"><i class="fa fa-envelope"></i> </a>';

                            return '<center>'+btn_approved+'&nbsp;'+btn_conversation+'</center>';
                        }
                    }
                ]
            });

             $('div.dataTables_filter input').addClass('dash_search_field');
        })();


        var bindEventHandlers=(function(){


            var detailRows = [];

           
            $('#tbl_po_list tbody').on( 'click', 'tr td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = dt.row( tr );
                var idx = $.inArray( tr.attr('id'), detailRows );

                if ( row.child.isShown() ) {
                    tr.removeClass( 'details' );
                    row.child.hide();

                    // Remove from the 'open' array
                    detailRows.splice( idx, 1 );
                }
                else {
                    tr.addClass( 'details' );
                    //console.log(row.data());
                    var d=row.data();

                    $.ajax({
                        "dataType":"html",
                        "type":"POST",
                        "url":"Templates/layout/po/"+ d.purchase_order_id+'?type=approval',
                        "beforeSend" : function(){
                            row.child( '<center><br /><img src="assets/img/loader/ajax-loader-lg.gif" /><br /><br /></center>' ).show();
                        }
                    }).done(function(response){
                        row.child( response,'no-padding' ).show();
                        // Add to the 'open' array
                        if ( idx === -1 ) {
                            detailRows.push( tr.attr('id') );
                        }
                    });




                }
            } );


            //*****************************************************************************************
            $('#tbl_po_list > tbody').on('click','button[name="approve_po"]',function(){
                _selectRowObj=$(this).closest('tr'); //hold dom of tr which is selected

                var data=dt.row(_selectRowObj).data();
                _selectedID=data.purchase_order_id;

                 approvePurchaseOrder().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        dt.row(_selectRowObj).remove().draw();
                    }

                });
            });


            //****************************************************************************************
            $('#tbl_po_list > tbody').on('click','button[name="mark_as_approved"]',function(){
                _selectRowObj=$(this).parents('tr').prev();
                _selectRowObj.find('button[name="approve_po"]').click();
                showSpinningProgress($(this));
            });


            //****************************************************************************************
            $('#tbl_po_list > tbody').on('click','button[name="external_link_conversation"]',function(){
                _selectRowObj=$(this).parents('tr').prev();
                _selectRowObj.find('#link_conversation').trigger("click");
                //alert(_selectRowObj.find('a[id="link_conversation"]').length);
            });




        })();






        //functions called on bindEventHandlers
        var approvePurchaseOrder=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Purchases/transaction/mark-approved",
                "data":{purchase_order_id : _selectedID}

            });
        };

        var showNotification=function(obj){
            PNotify.removeAll(); //remove all notifications
            new PNotify({
                title:  obj.title,
                text:  obj.msg,
                type:  obj.stat
            });
        };

        var showSpinningProgress=function(e){
            $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
        };



    });


</script>



</body>

</html>