year=2013
option=first
header=h1
textcolor=white

pdf:
	./months.php ${year} ${option} ${header} ${textcolor} 
	cp diary.tex diary-${year}${option}.tex
	xelatex -interaction=batchmode diary-${year}${option}.tex

clean:
	rm -rf month.tex diary-*
