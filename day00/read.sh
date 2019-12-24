while read line
do
	read d1
	read d2
    echo "<td><table class="""square"""><tr><td><bas>$d2</bas></td></tr><tr><td><letter>$d1</letter></td></tr><tr><td><haut>$line</haut></td></tr></table></td>"
			
	read d3
done < table3.dat
