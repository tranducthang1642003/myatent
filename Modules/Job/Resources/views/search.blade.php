@if (isset($filteredCvs))
    @foreach($filteredCvs as $cv)
        <div>
            <p>Name: {{ $cv->name }}</p>
            <p>Email: {{ $cv->email }}</p>
            <!-- Các thông tin khác của CV -->
            <p>Keyword: {{ $filteredKeyword }}</p>
            @php
                $totalWords = str_word_count(strtolower($cv->skills . $cv->education));
                $keywordCount = substr_count(strtolower($cv->skills . $cv->education), strtolower($filteredKeyword));
                $percentage = $totalWords > 0 ? round(($keywordCount / $totalWords) * 100, 2) : 0;
            @endphp
            <p>Keyword occurrence: {{ $keywordCount }}</p>
            <p>Percentage match: {{ $percentage }}%</p>
        </div>
    @endforeach
@endif
