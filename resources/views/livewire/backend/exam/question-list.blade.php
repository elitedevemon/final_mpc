<div>
  <!--Page header-->
  <div class="page-header">
    <div class="page-leftheader">
      <h4 class="page-title mb-0 text-primary">All Exams</h4>
    </div>
  </div>
  <!--End Page header-->

  <div class="card">
    <div class="card-body">
      <div class="table-responsive-sm">
        <table class="table table-bordered text-nowrap">
          <thead>
            <tr>
              <th class="wd-15p border-bottom-0">SI</th>
              <th class="wd-15p border-bottom-0">Topics</th>
              <th class="wd-20p border-bottom-0">Date</th>
              <th class="wd-15p border-bottom-0">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allQuestion as $question)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $question->name }}</td>
                <td>{{ date('d-m-Y', strtotime($question->date)) }}</td>
                <td>
                  <!-- Start exam button-->
                  <button class="btn btn-primary {{ $question->getResult?'d-none':'' }}" wire:click='startExam({{ $question->id }})' wire:loading.attr='disabled'>
                    <span wire:target="startExam({{ $question->id }})" wire:loading.class='d-none'>Start Exam</span>
                    <span wire:target="startExam({{ $question->id }})" wire:loading>Starting <i class="fa fa-spinner fa-spin"></i></span>
                  </button>

                  <!--View result button-->
                  @php
                    $resultPublished = App\Models\Superadmin\Exam\ExamTopic::where('id', $question->id)->where('publish_status', true)->first();
                  @endphp
                  <a class="btn btn-info {{ $question->getResult?'':'d-none' }}" href="{{ route($resultPublished?'show.result.page':'show.not-published.page', ['language'=>app()->getLocale(), 'resultId'=>$question->getResult?$question->getResult->id:'']) }}"  wire:loading.attr='disabled'>
                    <span>View Result <i class="fa fa-spinner fa-spin" wire:loading></i></span>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
