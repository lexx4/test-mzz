@echo off
echo Importing mzz_dummy.sql...
mysql -u root < mzz_dummy.sql
set /p a="Done! Press any key."