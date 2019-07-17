<div class="modal fade exampleModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="opacity: 0.8;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Donasi </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('modaldonasi')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" name="judul" id="exampleInputEmail1"
                            placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="exampleInputPassword1"
                            placeholder="Keterangan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Donasi</label>
                        <input type="number" class="form-control" name="jumlah_donasi" id="exampleInputEmail1"
                            placeholder="Jumlah donasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Rekening</label>
                        <input type="number" class="form-control" name="norek" id="exampleInputEmail1"
                            placeholder="Masukan Nomor Rekening minimal 10 angka">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Masukan Gambar</label>
                        <input type="file" id="exampleInputFile" name="gambar">
                        <!-- <p class="help-block">Bukti transfer.</p> -->
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
                <!-- <button type="submit" class="btn btn-primary">Buat Donasi</button> -->
            </div>
        </div>
    </div>
</div>
