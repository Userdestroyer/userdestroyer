<div class="webdev__main--container">
    <div class="webdev__name--container">
        <h1 class="webdev__name">{{ $description->first_name_upper }}</h1>
        <h1 class="webdev__name">{{ $description->last_name_upper }}</h1>
        <div>
        <p class="webdev__occupation webdev__infounit">{{ $description->occupation }}</p>
        </div>
    </div>
    <div class="webdev__experience--container">
        <div>
            <p class="webdev__experience">Relevant experience:</p>
            <p class="webdev__experience webdev__infounit">{{ $description->experience }}</p>
        </div>
        <div>
            <p class="webdev__description webdev__infounit">{{ $description->description }}</p>
        </div>
    </div>
    
</div>
