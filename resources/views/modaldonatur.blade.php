<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="opacity: 0.8;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Donatur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('modaldonatur')}}" method="POST">
        @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Masukan Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Komentar</label>
                <textarea  class="form-control" name="komen" id="exampleInputPassword1" placeholder="Masukan Komentar"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Donasi</label>
                <input type="number" class="form-control" name="jumlah_donasi" id="exampleInputEmail1" placeholder="Masukan Jumlah Donasi">
              </div>
              
              <div class="form-group">
                <label for="exampleInputFile">Masukan Bukti Transfer</label>
                <input type="file" id="exampleInputFile" name="bukti_tf">
                <p class="help-block">Untuk Pengecekan Oleh Admin</p>
              </div>
              <!-- <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div> -->
              <button type="submit" class="btn btn-default">Submit</button>
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Buat Donasi</button> -->
      </div>
    </div>
  </div>
</div>
