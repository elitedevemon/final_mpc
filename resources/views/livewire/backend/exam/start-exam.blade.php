<div>
  <section oncopy="return false;" oncut="return false;" onpaste="return false;">
    <!--Question header section-->
    <h4 class="text-center fw-bold mt-2">MPC Method</h4>
    <h5 class="text-center">Author: Mahfuz Ahmed Murad</h5>
    <h5 class="text-center">Exam Topic: {{ $topic->name }}</h5>
    <div class="row">
      <div class="col-6 text-start">
        <h6>Time: {{ $topic->time }}:00</h6>
      </div>
      <div class="col-6 text-end">
        <h6>Marks: {{ count($questions) }}</h6> 
      </div>
    </div>
    <hr style="height: 1px !important; margin: 10px 0 !important">
    <!--Question header section end-->

    <!--Insider section-->
    <div class="row">
      @foreach ($questions as $question)
        <div class="col-md-6 mt-2">
          <h5>{{ $loop->index+1 }}) {{ $question->question }}</h5>
          <!--first answer-->
          <div class="form-check">
            <input type="radio" name="ans{{ $question->id }}" id="qstFirstId{{ $question->id }}" value="{{ $question->first_answer }}" class="form-check-input @error('getQuestionAnswer') is-invalid @enderror" wire:model='getQuestionAnswer.{{ $question->id }}'>
            <label for="qstFirstId{{ $question->id }}" class="form-check-label"> {{ $question->first_answer }}</label>
          </div>

          <!--second answer-->
          <div class="form-check">
            <input type="radio" name="ans{{ $question->id }}" id="qstSecondId{{ $question->id }}" value="{{ $question->second_answer }}" class="form-check-input @error('getQuestionAnswer') is-invalid @enderror" wire:model='getQuestionAnswer.{{ $question->id }}'>
            <label for="qstSecondId{{ $question->id }}" class="form-check-label"> {{ $question->second_answer }}</label>
          </div>

          <!--third answer-->
          <div class="form-check">
            <input type="radio" name="ans{{ $question->id }}" id="qstThirdId{{ $question->id }}" value="{{ $question->third_answer }}" class="form-check-input @error('getQuestionAnswer') is-invalid @enderror" wire:model='getQuestionAnswer.{{ $question->id }}'>
            <label for="qstThirdId{{ $question->id }}" class="form-check-label"> {{ $question->third_answer }}</label>
          </div>

          <!--fourth answer-->
          <div class="form-check">
            <input type="radio"  name="ans{{ $question->id }}" id="qstFourthId{{ $question->id }}" value="{{ $question->fourth_answer }}" class="form-check-input @error('getQuestionAnswer') is-invalid @enderror" wire:model='getQuestionAnswer.{{ $question->id }}'>
            <label for="qstFourthId{{ $question->id }}" class="form-check-label"> {{ $question->fourth_answer }}</label>
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-center">
      <button class="btn btn-primary w-50" wire:click='submitAnswer'>Submit</button>
    </div>
    <!--end insider section-->
  </section>
</div>
