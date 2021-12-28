// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

// function removeProd(id, url) {
//     if (confirm('Xóa và không thể khôi phục. Bạn có chắc ?')) {
//         var tr = $(this).closest("tr");
//         $.ajax({
//             type: 'DELETE',
//             datatype: 'JSON',
//             data: { id },
//             url: url,
//             success: function (result) {
//                 console.log(result);
//                 if (result.error === false) {
//                     console.log("đã xóa được nè");
//                     tr.remove();
//                     location.reload();
//                 } 
//             }
//         })
//     }
// }

