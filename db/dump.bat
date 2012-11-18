@echo off

echo Exporting mzz_dummy.sql...
mysqldump --add-drop-database --add-drop-table --routines --net_buffer_length=4K --disable-add-locks --databases mzz_dummy -u root > mzz_dummy.sql

set /p a="Done! Press any key."