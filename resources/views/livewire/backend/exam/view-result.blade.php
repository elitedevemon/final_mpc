<div>
  <h3 class="text-center">MPC Method</h3>
  <h5 class="text-center">Author: Mahfuz Ahmed Murad</h5>
  <h5 class="text-center">Exam topic: {{ $resultInfo->getTopic->name }}</h5>
  <div class="row">
    <div class="col-6">
      <div class="text-start">
        <h6>Date: {{ date('d-m-Y', strtotime($resultInfo->getTopic->date)) }}</h6>
      </div>
    </div>
    <div class="col-6">
      <div class="text-end">
        <h6>Result: {{ $resultInfo->result }}</h6>
      </div>
    </div>
  </div>
  <hr style="height: 1px !important; margin: 10px 0px !important">

  <!--Insider question info-->
  <div class="row">
    @foreach ($allQuestion as $question)
      <!--check correct answer-->
      @php
        $checkCorrect = App\Models\Backend\Exam\ExamAnswer::where('username', Auth::user()->username)->where('topic_id', $question->topic_id)->where('question_id', $question->id)->first();
      @endphp
      <!--end check-->
      <div class="col-md-6">
        <h5 class="fw-bold">{{ $loop->index+1 }}) {{ $question->question }}</h5>
        <div class="form-check">
          <input type="radio" disabled {{ $checkCorrect->answer == $question->first_answer?'checked':'' }} id="first_answer{{ $question->id }}" class="form-check-input">
          <label for="first_answer{{ $question->id }}">{{ $question->first_answer }}</label>
        </div>
        <div class="form-check">
          <input type="radio" disabled {{ $checkCorrect->answer == $question->second_answer?'checked':'' }} id="second_answer{{ $question->id }}" class="form-check-input">
          <label for="second_answer{{ $question->id }}">{{ $question->second_answer }}</label>
        </div>
        <div class="form-check">
          <input type="radio" {{ $checkCorrect->answer == $question->third_answer?'checked':'' }} disabled id="third_answer{{ $question->id }}" class="form-check-input">
          <label for="third_answer{{ $question->id }}">{{ $question->third_answer }}</label>
        </div>
        <div class="form-check">
          <input type="radio" disabled {{ $checkCorrect->answer == $question->fourth_answer?'checked':'' }} id="fourth_answer{{ $question->id }}" class="form-check-input">
          <label for="fourth_answer{{ $question->id }}">{{ $question->fourth_answer }}</label>
        </div>
        <h6 class="fw-bold"><span class="text-success">Correct ans:</span> {{ $question->correct_answer }}</h5>
      </div>
    @endforeach
  </div>
  <!--end insider question info-->
</div>
