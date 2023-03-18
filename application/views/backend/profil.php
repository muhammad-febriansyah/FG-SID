<?php
$id = $this->session->userdata("id");

$q = $this->db->query("select * from admin where id='$id'");
$row = $q->row();
?>
<!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-body">
             <!-- add content here -->
             <div class="col-12">
                 <div class="card">
                     <div class="card-header bg-blue">
                         <h4 class="text-light">Ubah password</h4>
                     </div>
                     <div class="card-body">
                         <form action="main/saveprofile" id="save" enctype="multipart/form-data" method="post">
                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                 <div class="col-sm-12 col-md-7">
                                     <input type="text" class="form-control " value="<?php echo $row->nama ?>" autocomplete="off" placeholder="Nama "
                                         name="nama">
                                 </div>
                             </div>
                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                                 <div class="col-sm-12 col-md-7">
                                     <input type="txxt" class="form-control " value="<?php echo $row->username ?>"  autocomplete="off" placeholder="Username "
                                         name="username">
                                 </div>
                             </div>

                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                                 <div class="col-sm-12 col-md-7">
                                     <input type="password" class="form-control " autocomplete="off" placeholder="kosongkan jika tidak diubah.. "
                                         name="password">
                                 </div>
                             </div>


                             <div class="form-group row mb-4">
                                 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                 <div class="col-sm-12 col-md-7">
                                     <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>
                                         Simpan</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <!--  -->
 </div>
 </section>

 </div>
 <script>
$("#save").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
        type: "post",
        url: $(this).attr('action'),
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(response) {
            Swal.fire({
                title: "Informasi",
                text: "Profil Berhasil Diperbarui!",
                icon: "success",
                showCancelButton: false,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                window.location.reload();
            })
        },
        error: function(e) {
            alert("ada kesalahan sistem")
        }
    });
});
 </script>