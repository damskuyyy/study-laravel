@extends('admin.admin_master')

@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-12">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kuliah</h3>
              <a href="{{route('kuliah.add')}}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Kuliah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Kode Kuliah</th>
                      <th>Nama Kuliah</th>
                      <th>Pengajar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allDataKuliah as $key => $kuliah)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{$kuliah->namaKuliah }}</td>
                      <td>{{ $kuliah->pengajar }}</td>
                      <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" id="delete" class="btn btn-danger">Delete</a>
                      </td>

                    </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
</div>
<!-- /.content-wrapper -->




@endsection

<!-- Vendor JS -->

<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/pages/data-table.js')}}"></script>