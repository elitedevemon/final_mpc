<div>
  <h3 class="text-center">MPC Method</h3>
  <div class="text-center">
    <h5>Exam topic: {{ $topicDetails->name }}</h5>
    <div class="row">
      <div class="col-6">
        <div class="text-start">
          Time: {{ $topicDetails->time }}
        </div>
      </div>
      <div class="col-6">
        <div class="text-end">
          Date: {{ date('d-m-Y', strtotime($topicDetails->date)) }}
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="text-center">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addQuestion" wire:loading.attr='disabled'>Add Question <i class="fa fa-spinner fa-spin" wire:loading></i></button>
  </div>

  <!--All questions-->
  <div class="row">
    @foreach ($allQuestion as $question)
      <div class="col-md-6 mt-2">
        <h5>{{ $loop->index+1 }}) {{ $question->question }}</h5>
        <!--first answer-->
        <div class="form-check">
          <input type="radio" {{ $question->first_answer == $question->correct_answer ? 'checked':'' }} name="ans{{ $question->id }}" id="qstFirstId{{ $question->id }}" value="{{ $question->first_answer }}" class="form-check-input">
          <label for="qstFirstId{{ $question->id }}" class="form-check-label"> {{ $question->first_answer }}</label>
        </div>

        <!--second answer-->
        <div class="form-check">
          <input type="radio" {{ $question->second_answer == $question->correct_answer ? 'checked':'' }} name="ans{{ $question->id }}" id="qstSecondId{{ $question->id }}" value="{{ $question->second_answer }}" class="form-check-input">
          <label for="qstSecondId{{ $question->id }}" class="form-check-label"> {{ $question->second_answer }}</label>
        </div>

        <!--third answer-->
        <div class="form-check">
          <input type="radio" {{ $question->third_answer == $question->correct_answer ? 'checked':'' }} name="ans{{ $question->id }}" id="qstThirdId{{ $question->id }}" value="{{ $question->third_answer }}" class="form-check-input">
          <label for="qstThirdId{{ $question->id }}" class="form-check-label"> {{ $question->third_answer }}</label>
        </div>

        <!--fourth answer-->
        <div class="form-check">
          <input type="radio" {{ $question->fourth_answer == $question->correct_answer ? 'checked':'' }}  name="ans{{ $question->id }}" id="qstFourthId{{ $question->id }}" value="{{ $question->fourth_answer }}" class="form-check-input">
          <label for="qstFourthId{{ $question->id }}" class="form-check-label"> {{ $question->fourth_answer }}</label>
        </div>
      </div>
    @endforeach
  </div>
  <!--end all question-->

  <!------------------------------------- Modal --------------------------------->
  <!--Add question modal-->
  <!-- Button trigger modal -->
  <div class="modal fade" id="addQuestion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addQuestionLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addQuestionLabel">Add Question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" name="" placeholder="Enter question" id="" class="form-control @error('question') is-invalid @enderror" wire:model.debounce.1000ms='question'>
          <div class="row">
            <div class="col-6">
              <div class="input-group mt-2">
                <div class="input-group-text">
                  <input type="radio" name="correct_answer" value="{{ $firstAnswer }}" id="" class="form-check-input mt-0  @error('correctAnswer') is-invalid @enderror" wire:model.debounce.1000ms='correctAnswer'>
                </div>
                <input type="text" wire:model.debounce.1000ms="firstAnswer" class="form-control">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group mt-2">
                <div class="input-group-text">
                  <input type="radio" name="correct_answer" value="{{ $secondAnswer }}" id="" class="form-check-input mt-0  @error('correctAnswer') is-invalid @enderror" wire:model.debounce.1000ms='correctAnswer'>
                </div>
                <input type="text" wire:model.debounce.1000ms="secondAnswer" class="form-control">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group mt-2">
                <div class="input-group-text">
                  <input type="radio" name="correct_answer" value="{{ $thirdAnswer }}" id="" class="form-check-input mt-0  @error('correctAnswer') is-invalid @enderror" wire:model.debounce.1000ms='correctAnswer'>
                </div>
                <input type="text" wire:model.debounce.1000ms="thirdAnswer" class="form-control">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group mt-2">
                <div class="input-group-text">
                  <input type="radio" name="correct_answer" value="{{ $lastAnswer }}" id="" class="form-check-input mt-0  @error('correctAnswer') is-invalid @enderror" wire:model.debounce.1000ms='correctAnswer'>
                </div>
                <input type="text" wire:model.debounce.1000ms="lastAnswer" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click='addQuestion' wire:loading.attr='disabled'>Add <i class="fa fa-spinner fa-spin" wire:loading wire:target='addQuestion'></i></button>
        </div>
      </div>
    </div>
  </div>
  <!--end add question modal-->
</div>
