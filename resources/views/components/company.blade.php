<div class="company__container">
    <header class="company__container--header">
        <div class="company__title company__title--bold">
            {{ $company->company_name }}
        </div>
        <div class="company__title">
            {{ $company->work_duration }}
        </div>
</header>

<x-projects :company="$company"/>

</div>
@if($company->getKey() > 1)
<div class="vl"></div>
@endif