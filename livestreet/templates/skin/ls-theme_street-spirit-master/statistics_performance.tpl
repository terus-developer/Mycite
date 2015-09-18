{if $bIsShowStatsPerformance and $oUserCurrent and $oUserCurrent->isAdministrator()}
	<div class="stat-performance">
		{hook run='statistics_performance_begin'}
		
		{hook run='statistics_performance_end'}
	</div>
{/if}