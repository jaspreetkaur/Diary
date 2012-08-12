year=2013
option=first
header=h1
textcolor=white

pdf:
	./months.php ${year} ${option} ${header} ${textcolor} 
	cp diary.tex diary-${year}${header}${option}.tex
	xelatex -interaction=batchmode diary-${year}${header}${option}.tex

clean:
	rm -rf month.tex diary-*
