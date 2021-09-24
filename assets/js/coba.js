
const flashData = $('.flash-data').data('flashdata');
console.log(flashData);
if (flashData) {
  swal({
    icon:'success',
    title:'Data',
    text:flashData,
    type:''
  });
}
