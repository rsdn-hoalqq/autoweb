{{-- <script type="text/javascript" src="{{ asset('/js/admin/jquery-3.2.1.slim.min.js') }}"></script> --}}
<link href="{{ asset('/css/cropper.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('/js/cropper.js') }}"></script>
<style>
    .cropper-bg{
      /*background-image: none;*/
    }
    img {
      max-width: 100%; /* This rule is very important, please do not ignore this! */
    }
    .cropper-drag-box {
        /*background-color: #fff !important;*/
    }
  </style>
  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="row">
      <div class="col-sm-10">
        <img src="" alt="" class="imageModal" id="image">
      </div>
      <div class="col-sm-2">
        <button type="button" class="btn btn-secondary btnModal" data-dismiss="modal" onClick="closed()">Hủy</button>
        <button type="button" class="btn btn-primary btnModal" onClick="cropperImage('image')">Sữa ảnh</button>
      </div>
    </div>
  </div>

</div>