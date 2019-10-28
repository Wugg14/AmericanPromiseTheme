jQuery(document).ready( function () {
    jQuery('#table1').DataTable({
		pageLength: 25,
    order: [[0, 'asc']]
	});
	jQuery('#table2').DataTable({
		pageLength: 25,
    order: [[0, 'asc']]
	});
  jQuery('#table3').DataTable({
    pageLength: 10,
    order: [[1, 'asc']]
  });
  jQuery('#table4').DataTable({
    pageLength: 10,
      order: [[3, 'asc']]
  });
    jQuery('#table5').DataTable({
        pageLength: 25
    });
    jQuery('#table6').DataTable({
        pageLength: 100
    });
});
