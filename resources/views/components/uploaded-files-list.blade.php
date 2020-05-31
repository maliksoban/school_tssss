@if(count($files) > 0 )
<div class="table-responsive">
    <table class="table table-bordered table-data-div table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('File Name')</th>
        @if($upload_type == 'syllabus' && $parent == 'class')
          <th scope="col">@lang('Class')</th>
        @elseif($upload_type == 'routine' && $parent == 'section')
          <th scope="col">@lang('section')</th>
        @endif
        <th scope="col">@lang('Is Active')</th>
      </tr>
    </thead>
    <tbody>
      @foreach($files as $file)
      <tr>
        <td>{{($loop->index + 1)}}</td>
        <td><a href="{{url($file->file_path)}}" target="_blank">{{$file->title}}</a></td>
        @if($upload_type == 'syllabus' && $parent == 'class')
          <td>{{$file->myclass->class_number}}</td>
        @elseif($upload_type == 'routine' && $parent == 'section')
          <td>{{$file->section->section_number}}</td>
        @endif
          
          <td>
              <input type="checkbox" data-id="{{$file->id}}" name="status" class="js-switch"
                  {{$file->active == 1 ? 'checked': ''}} >
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <script>
        $(document).ready(function ()
        {
            $('.js-switch').change(function () {

                let status = $(this).prop('checked') == true ? 1 : 0;
                let fileId = $(this).data('id');
                if (fileId !== 0) {
                    $.ajax({
                        dataType: "json",
                        type: "GET",
                        url: "{{url('academic/remove/'.$upload_type.'/'.$file->id)}}",
                        data: {'status': status, 'id': fileId},

                        success: function (data) {
                            console.log(data.message)

                            toastr.options.closeButton = true;
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 100;
                            toastr.success(data.message);
                        }
                    });
                }
                else {
                    alert('no data');
                }
            });
        });
    </script>
</div>
@else
    <h3 style="color: #aa0719" class="text-center">No data to show insert some new data</h3>
@endif

