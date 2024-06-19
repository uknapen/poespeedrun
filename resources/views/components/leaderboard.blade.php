@unless (count($runs) == 0)
    <div class="table">
        <div class="table-row table-heading">
            <div class="table-cell">#</div>
            <div class="table-cell">Player</div>
            <div class="table-cell">@sortablelink('time', 'Time')</div>
            <div class="table-cell">Date</div>
            <div class="table-cell">Archetype</div>
            <div class="table-cell">Deathless</div>
        </div>

        <?php $count = 1; ?>

        @foreach ($runs as $run)
            <a href="/{{ $run->id }}" class="table-row hover:bg-secondmenubg">

                <div class="table-cell">
                    <span class="inline-flex flex-nowrap items-center justify-start gap-1">
                        <div class="relative h-5 w-5">
                            <?php
                            
                            if ($count == 1) {
                                echo '<img src="images/1st.png" alt="First Place" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" /> ';
                            } elseif ($count == 2) {
                                echo '<img src="images/2nd.png" alt="Second Place" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />';
                            } elseif ($count == 3) {
                                echo '<img src="images/3rd.png" alt="Third Place" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" />';
                            } else {
                                echo $count;
                            }
                            $count++;
                            ?>
                        </div>
                    </span>
                </div>
                <div class="table-cell">{{ $run['player'] }}</div>
                <div class="table-cell">{{ $run['time'] }}</div>
                <div class="table-cell">{{ $run['date'] }}</div>
                <div class="table-cell">{{ $run['archetype'] }}</div>
                <div class="table-cell">{{ $run['deathless'] }}</div>
            </a>
        @endforeach
    </div>
@else
    <div class="flex w-full flex-col flex-nowrap items-center justify-center gap-4 p-8">
        <p class="text-sm text-secondmenutxt">No runs yet</p>
    </div>
@endunless
