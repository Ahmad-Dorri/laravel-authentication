<div>
    <h5 class="text-red-500" >hello from shitty app</h5>
    <p>title: {{ $job->name }}</p>
    <a href="{{ url("/jobs/{$job->id}") }}" >See the job</a>
</div>
