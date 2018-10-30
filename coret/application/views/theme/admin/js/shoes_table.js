  
  var opt={"oLanguage":{"sProcessing":"處理中...",
                                     "sLengthMenu":" _MENU_ 每頁顯示筆數",
                                     "sZeroRecords":"沒有資料",
                                     "sInfo":"顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
                                     "sInfoEmpty":"顯示第 0 至 0 項結果，共 0 項",
                                     "sInfoFiltered":"(從 _MAX_ 項結果過濾)",
                                     "sSearch":"搜尋:",
                                     "oPaginate":{"sFirst":"首頁",
                                                          "sPrevious":"上頁",
                                                          "sNext":"下頁",
                                                          "sLast":"尾頁,"}
                              
                                     },
                    "aaSorting": [],
                    stateSave: true,
                    "aoColumns": [
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' }]
               };


  $('#search_shoes').DataTable(opt).search(
       $('#col0_filter').val()
    ).draw();

function filterColumn ( i ) {
    $('#search_shoes').DataTable().search(
       $('#col0_filter').val()
    ).draw();
}
 
$(document).ready(function() {
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );