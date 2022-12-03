@if(count($projects))
<p class="company__title company__title--bold">PROJECTS:</p>
<div class="projects__container">
    @foreach($projects as $project)
        <div class="project__item">
            <a href="{{ $project->website }}">
                {{ $project->website }}
            </a>
        </div>
    @endforeach
</div>
@endif