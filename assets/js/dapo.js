$(document).ready(function () {
	$("input[name=kd_tipeusaha]").keyup(function () {
		$(this).val($(this).val().toUpperCase());
	});
	$("input[name=kd_bidangusaha]").keyup(function () {
		$(this).val($(this).val().toUpperCase());
	});
	$("input[name=kd_jenisusaha]").keyup(function () {
		$(this).val($(this).val().toUpperCase());
	});
	$("input[name=nama_bidangusaha]").keyup(function () {
		$(this).val($(this).val().replace(/\w\S*/g, (w)=>(w.replace(/^\w/, (c) => c.toUpperCase()))));
	});
	$("input[name=nama_tipeusaha]").keyup(function () {
		$(this).val($(this).val().replace(/\w\S*/g, (w)=>(w.replace(/^\w/, (c) => c.toUpperCase()))));
	});
	$("input[name=nama_jenisusaha]").keyup(function () {
		$(this).val($(this).val().replace(/\w\S*/g, (w)=>(w.replace(/^\w/, (c) => c.toUpperCase()))));
	});
});
