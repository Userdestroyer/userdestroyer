<div class="webdev__main--container">
    <div class="webdev__name--container">
        <h1 class="webdev__name">{{ $job->first_name_upper }}</h1>
        <h1 class="webdev__name">{{ $job->last_name_upper }}</h1>
        <div>
        <p class="webdev__occupation webdev__infounit">{{ $job->occupation }}</p>
        </div>
    </div>
    <div class="webdev__experience--container">
        <div>
            <p class="webdev__experience">Relevant experience:</p>
            <p class="webdev__experience webdev__infounit">{{ $job->experience }}</p>
        </div>
        <div>
            <p class="webdev__description webdev__infounit">{{ $job->description }}</p>
        </div>
    </div>
    
</div>
