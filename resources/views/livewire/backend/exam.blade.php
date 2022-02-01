<div>
  <div class="app-content main-content">
    <div class="side-app">
      @if ($examTopicId == 'all')
        @livewire('backend.exam.question-list')
      @else
        @livewire('backend.exam.start-exam', ['examTopicId'=>$examTopicId])
      @endif
    </div>
  </div>
</div>
