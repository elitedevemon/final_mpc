<div>
  <div class="app-content main-content">
    <div class="side-app">
      <h3 class="text-center mt-4">Result haven't published yet.!</h3>
      <p class="text-center">The result of {{ $topic->name }} will be published {{ date('d-m-Y', strtotime($topic->publish_date)) }}</p>
      <h5 class="text-center">Thanks for your patience.</h5>
    </div>
  </div>
</div>
