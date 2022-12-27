<?php

	/* addizione */

	function addizione (n1, n2) { retunr n1 + n2 }

	/* sottrazione */

	function sottrazione (n1, n2) { retunr n1 - n2 }
	
	/* sottrazione */

	function moltiplicazione (n1, n2) { retunr n1 * n2 }
	
	/* divisione con check */
	
	function divisione (n1, n2) {
		if( n2 != 0) { return n1 / n2}
		else { return "errore";}
	}
?>