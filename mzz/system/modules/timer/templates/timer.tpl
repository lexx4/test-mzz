{_ time}: {$timer->getPeriod()|round:4} {_ sec}. {_ sql_queries} {$timer->getQueriesNum()}+{$timer->getPreparedNum()}: {$timer->getQueriesTime()|number_format:4} {_ sec}.
{_ memory_peak}: {$timer->getMemoryPeak()/1048576|number_format:1}M/{if is_numeric($timer->getMemoryLimit())}{$timer->getMemoryLimit()/1048576|number_format:1}{else}{$timer->getMemoryLimit()|h}{/if}.
{_ memory_current}: {$timer->getMemoryCurrent()/1048576|number_format:1}M.