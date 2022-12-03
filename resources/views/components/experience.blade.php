<div class="experience__section">
    <h2>EXPERIENCE:</h2>
    @foreach($companies as $company)
        <x-company :company="$company"/>
    @endforeach
</div>