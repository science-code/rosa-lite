<?php

//The export from the Theme Options - base64 encoded: http://www.base64encode.org/
// Encode in base64 with http://www.opinionatedgeek.com/dotnet/tools/base64encode because base64encode.org lacks in memory and it cannot decode long strings
$theme_options = "eyJsYXN0X3RhYiI6IiIsInVzZV9zbW9vdGhfc2Nyb2xsIjoiMSIsIm1haW5fbG9nb19saWdodCI6eyJ1cmwiOiJodHRwOlwvXC9waXhlbGdyYWRlLmNvbVwvZGVtb3NcL3Jvc2FcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMTRcLzA2XC9sb2dvLXJvc2Etd2hpdGUucG5nIiwiaWQiOiIyMDAiLCJoZWlnaHQiOiIyOCIsIndpZHRoIjoiODYiLCJ0aHVtYm5haWwiOiJodHRwOlwvXC9waXhlbGdyYWRlLmNvbVwvZGVtb3NcL3Jvc2FcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMTRcLzA2XC9sb2dvLXJvc2Etd2hpdGUucG5nIn0sInVzZV9yZXRpbmFfbG9nbyI6IjEiLCJyZXRpbmFfbWFpbl9sb2dvX2xpZ2h0Ijp7InVybCI6Imh0dHA6XC9cL3BpeGVsZ3JhZGUuY29tXC9kZW1vc1wvcm9zYVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAxNFwvMDZcL2xvZ28tcm9zYS13aGl0ZS0yeC5wbmciLCJpZCI6IjIwMiIsImhlaWdodCI6IjU2Iiwid2lkdGgiOiIxNzIiLCJ0aHVtYm5haWwiOiJodHRwOlwvXC9waXhlbGdyYWRlLmNvbVwvZGVtb3NcL3Jvc2FcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMTRcLzA2XC9sb2dvLXJvc2Etd2hpdGUtMngucG5nIn0sIm1haW5fbG9nb19kYXJrIjp7InVybCI6Imh0dHA6XC9cL3BpeGVsZ3JhZGUuY29tXC9kZW1vc1wvcm9zYVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAxNFwvMDZcL2xvZ28tcm9zYTEucG5nIiwiaWQiOiIyMDEiLCJoZWlnaHQiOiIyOCIsIndpZHRoIjoiODYiLCJ0aHVtYm5haWwiOiJodHRwOlwvXC9waXhlbGdyYWRlLmNvbVwvZGVtb3NcL3Jvc2FcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMTRcLzA2XC9sb2dvLXJvc2ExLnBuZyJ9LCJyZXRpbmFfbWFpbl9sb2dvX2RhcmsiOnsidXJsIjoiaHR0cDpcL1wvcGl4ZWxncmFkZS5jb21cL2RlbW9zXC9yb3NhXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDE0XC8wNlwvbG9nby1yb3NhLWRhcmstMngucG5nIiwiaWQiOiIyMDMiLCJoZWlnaHQiOiI1NiIsIndpZHRoIjoiMTcyIiwidGh1bWJuYWlsIjoiaHR0cDpcL1wvcGl4ZWxncmFkZS5jb21cL2RlbW9zXC9yb3NhXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDE0XC8wNlwvbG9nby1yb3NhLWRhcmstMngucG5nIn0sImZhdmljb24iOnsidXJsIjoiaHR0cDpcL1wvcGl4ZWxncmFkZS5jb21cL2RlbW9zXC9yb3NhXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDE0XC8wNlwvcm9zYS1mYXZpY29uLnBuZyIsImlkIjoiMTgwIiwiaGVpZ2h0IjoiMTYiLCJ3aWR0aCI6IjE2IiwidGh1bWJuYWlsIjoiaHR0cDpcL1wvcGl4ZWxncmFkZS5jb21cL2RlbW9zXC9yb3NhXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDE0XC8wNlwvcm9zYS1mYXZpY29uLnBuZyJ9LCJhcHBsZV90b3VjaF9pY29uIjp7InVybCI6IiIsImlkIjoiIiwiaGVpZ2h0IjoiIiwid2lkdGgiOiIiLCJ0aHVtYm5haWwiOiIifSwibWV0cm9faWNvbiI6eyJ1cmwiOiIiLCJpZCI6IiIsImhlaWdodCI6IiIsIndpZHRoIjoiIiwidGh1bWJuYWlsIjoiIn0sIm1haW5fY29sb3IiOiIjYzU5ZDVmIiwidGV4dF9jb2xvciI6IiM1MTUxNTAiLCJoZWFkaW5nc19jb2xvciI6IiMyNjI1MjYiLCJjb3Zlcl90ZXh0IjoiI2ZmZmZmZiIsImhlYWRlcl9iYWNrZ3JvdW5kX2NvbG9yIjoiI2ZmZmZmZiIsImhlYWRlcl9pbWFnZV9wYXR0ZXJuIjp7ImJhY2tncm91bmQtcmVwZWF0IjoiIiwiYmFja2dyb3VuZC1zaXplIjoiIiwiYmFja2dyb3VuZC1hdHRhY2htZW50IjoiIiwiYmFja2dyb3VuZC1wb3NpdGlvbiI6IiIsImJhY2tncm91bmQtaW1hZ2UiOiIiLCJtZWRpYSI6eyJpZCI6IiIsImhlaWdodCI6IiIsIndpZHRoIjoiIiwidGh1bWJuYWlsIjoiIn19LCJjb250ZW50X2JhY2tncm91bmRfY29sb3IiOiIjZmZmZmZmIiwiY29udGFpbmVyX2ltYWdlX3BhdHRlcm4iOnsiYmFja2dyb3VuZC1yZXBlYXQiOiIiLCJiYWNrZ3JvdW5kLXNpemUiOiIiLCJiYWNrZ3JvdW5kLWF0dGFjaG1lbnQiOiIiLCJiYWNrZ3JvdW5kLXBvc2l0aW9uIjoiIiwiYmFja2dyb3VuZC1pbWFnZSI6IiIsIm1lZGlhIjp7ImlkIjoiIiwiaGVpZ2h0IjoiIiwid2lkdGgiOiIiLCJ0aHVtYm5haWwiOiIifX0sImZvb3Rlcl9zaWRlYmFyX3N0eWxlIjoiZGFyayIsImZvb3Rlcl9ib3R0b21iYXJfc3R5bGUiOiJkYXJrIiwidXNlX2dvb2dsZV9mb250cyI6IjEiLCJnb29nbGVfdGl0bGVzX2ZvbnQiOnsiZm9udC1mYW1pbHkiOiIiLCJmb250LW9wdGlvbnMiOiJbb2JqZWN0IE9iamVjdF0iLCJnb29nbGUiOiIxIiwiZm9udC13ZWlnaHQiOiIiLCJmb250LXN0eWxlIjoiIiwic3Vic2V0cyI6IiJ9LCJnb29nbGVfc3VidGl0bGVzX2ZvbnQiOnsiZm9udC1mYW1pbHkiOiIiLCJmb250LW9wdGlvbnMiOiJbb2JqZWN0IE9iamVjdF0iLCJnb29nbGUiOiIxIiwiZm9udC13ZWlnaHQiOiIiLCJmb250LXN0eWxlIjoiIiwic3Vic2V0cyI6IiJ9LCJzdWJoZWFkaW5nc19ib3R0b20tc3BhY2luZyI6Ii0zOCIsInN1YmhlYWRpbmdzX2ZpcnN0LWxldHRlciI6IjkiLCJnb29nbGVfbmF2X2ZvbnQiOnsiZm9udC1mYW1pbHkiOiIiLCJmb250LW9wdGlvbnMiOiJBcnJheSIsImdvb2dsZSI6IjEiLCJmb250LXdlaWdodCI6IiIsImZvbnQtc3R5bGUiOiIiLCJzdWJzZXRzIjoiIn0sIm5hdl9mb250LXNpemUiOiIxMyIsIm5hdl9sZXR0ZXItc3BhY2luZyI6IjEiLCJuYXZfdGV4dC10cmFuc2Zvcm0iOiJ1cHBlcmNhc2UiLCJuYXZfdGV4dC1kZWNvcmF0aW9uIjoibm9uZSIsImdvb2dsZV9ib2R5X2ZvbnQiOnsiZm9udC1mYW1pbHkiOiIiLCJmb250LW9wdGlvbnMiOiJbb2JqZWN0IE9iamVjdF0iLCJnb29nbGUiOiIxIiwic3Vic2V0cyI6IiJ9LCJib2R5LWZvbnQtc2l6ZSI6IjE2IiwiYm9keS1saW5lLWhlaWdodCI6IjEuNyIsImNvbnRlbnRfd2lkdGgiOiIxMjUwIiwic2VjdGlvbnNfdmVydGljYWxfbWFyZ2lucyI6Ijc4Iiwic2lkZWJhcl93aWR0aCI6IjMwMCIsImhlYWRlcl9sb2dvX2hlaWdodCI6IjM2IiwiaGVhZGVyX3ZlcnRpY2FsX21hcmdpbnMiOiIwIiwibmF2aWdhdGlvbl9tZW51X2l0ZW1zX3NwYWNpbmciOiIyNCIsIm5hdl9hbHdheXNfc2hvdyI6IjEiLCJuYXZfcGxhY2VtZW50IjoiYm90dG9tIiwibmF2X3NlcGFyYXRvcnMiOiJkZWZhdWx0IiwibmF2X2JvcmRlcnMiOiIxIiwiZm9vdGVyX251bWJlcl9vZl9jb2x1bW5zIjoiMSIsImZvb3Rlcl9jb2x1bW5fd2lkdGgiOiJ0d28tdGhpcmRzIiwiY29weXJpZ2h0X3RleHQiOiJcdTAwYTkgUk9TQSAyMDE0IFx1MDBhMCBcdTIwMjIgXHUwMGEwIDM3NiBWYW4gQnJ1bnQgU3QuIEJyb29rbHluLCBOWSBcdTAwYTAgXHUyMDIyIFx1MDBhMCBUZWw6IDcxNDk0NTYzIFx1MDBhMCBcdTIwMjIgXHUwMGEwIEhhbmRjcmFmdGVkIHdpdGggbG92ZSBieVx1MDBhMDxhIGhyZWY9XCJodHRwOlwvXC90aGVtZWZvcmVzdC5uZXRcL3VzZXJcL3BpeGVsZ3JhZGVcIiB0YXJnZXQ9XCJfYmxhbmtcIj5QaXhlbEdyYWRlPFwvYT5cdTAwYTBUZWFtIiwiYmxvZ19yZWFkX21vcmVfdGV4dCI6IlJlYWQgbW9yZSIsImJsb2dfZXhjZXJwdF9tb3JlX3RleHQiOiIuLiIsImJsb2dfZXhjZXJwdF9sZW5ndGgiOiIxNDAiLCJibG9nX3Nob3dfZGF0ZSI6IjEiLCJibG9nX2N1c3RvbV9kYXRlX3NlcGFyYXRvciI6IjEiLCJibG9nX3NpbmdsZV9zaG93X2F1dGhvcl9ib3giOiIxIiwiYmxvZ19zaW5nbGVfc2hvd19zaGFyZV9saW5rcyI6IjEiLCJjb21tZW50c19zaG93X2F2YXRhciI6IiIsImNvbW1lbnRzX3Nob3dfbnVtYmVyaW5nIjoiMSIsImJsb2dfc2luZ2xlX3Nob3dfc2lkZWJhciI6IjEiLCJzaGFyZV9idXR0b25zX3NldHRpbmdzIjoibW9yZSxwcmVmZXJyZWQscHJlZmVycmVkLHByZWZlcnJlZCxwcmVmZXJyZWQiLCJzaGFyZV9idXR0b25zX2VuYWJsZV90cmFja2luZyI6IjAiLCJzaGFyZV9idXR0b25zX2VuYWJsZV9hZGR0aGlzX3RyYWNraW5nIjoiMCIsInNoYXJlX2J1dHRvbnNfYWRkdGhpc191c2VybmFtZSI6IiIsInNoYXJlX2J1dHRvbnNfZW5hYmxlX2dhX3RyYWNraW5nIjoiMCIsInNoYXJlX2J1dHRvbnNfZ2FfaWQiOiIiLCJzaGFyZV9idXR0b25zX2VuYWJsZV9nYV9zb2NpYWxfdHJhY2tpbmciOiIwIiwic29jaWFsX2ljb25zIjp7InR3aXR0ZXIiOnsidmFsdWUiOiJodHRwczpcL1wvdHdpdHRlci5jb21cL3BpeGVsZ3JhZGUiLCJjaGVja2JveGVzIjp7IndpZGdldCI6Im9uIiwiaGVhZGVyIjoib24ifX0sImZhY2Vib29rIjp7InZhbHVlIjoiaHR0cHM6XC9cL3d3dy5mYWNlYm9vay5jb21cL1BpeGVsR3JhZGVNZWRpYSIsImNoZWNrYm94ZXMiOnsid2lkZ2V0Ijoib24iLCJoZWFkZXIiOiJvbiJ9fSwiZmxpY2tyIjp7InZhbHVlIjoiIn0sInR1bWJsciI6eyJ2YWx1ZSI6IiJ9LCJwaW50ZXJlc3QiOnsidmFsdWUiOiJ3d3cucGludGVyZXN0LmNvbVwvYmFiYmFyZGVsXC8iLCJjaGVja2JveGVzIjp7IndpZGdldCI6Im9uIn19LCJpbnN0YWdyYW0iOnsidmFsdWUiOiIifSwiYmVoYW5jZSI6eyJ2YWx1ZSI6Imh0dHBzOlwvXC93d3cuYmVoYW5jZS5uZXRcL2JhYmJhcmRlbCJ9LCJmaXZlaHVuZHJlZHB4Ijp7InZhbHVlIjoiIn0sImRldmlhbnRhcnQiOnsidmFsdWUiOiIifSwiZHJpYmJibGUiOnsidmFsdWUiOiIifSwiZ3BsdXMiOnsidmFsdWUiOiIifSwieW91dHViZSI6eyJ2YWx1ZSI6Imh0dHBzOlwvXC93d3cueW91dHViZS5jb21cL3VzZXJcL1BpeGVsR3JhZGVWaWRlb3MifSwidmltZW8iOnsidmFsdWUiOiIifSwibGlua2VkaW4iOnsidmFsdWUiOiJodHRwczpcL1wvd3d3LmxpbmtlZGluLmNvbVwvY29tcGFueVwvcGl4ZWxncmFkZS1tZWRpYSIsImNoZWNrYm94ZXMiOnsid2lkZ2V0Ijoib24ifX0sInNreXBlIjp7InZhbHVlIjoiIn0sInNvdW5kY2xvdWQiOnsidmFsdWUiOiIifSwiZGlnZyI6eyJ2YWx1ZSI6IiJ9LCJsYXN0Zm0iOnsidmFsdWUiOiIifSwicmRpbyI6eyJ2YWx1ZSI6IiJ9LCJzaW5hLXdlaWJvIjp7InZhbHVlIjoiIn0sInZrb250YWt0ZSI6eyJ2YWx1ZSI6IiJ9LCJhcHBuZXQiOnsidmFsdWUiOiIifSwicnNzIjp7InZhbHVlIjoiIn19LCJzb2NpYWxfaWNvbnNfdGFyZ2V0X2JsYW5rIjoiMSIsInByZXBhcmVfZm9yX3NvY2lhbF9zaGFyZSI6IjEiLCJmYWNlYm9va19pZF9hcHAiOiIiLCJmYWNlYm9va19hZG1pbl9pZCI6IiIsImdvb2dsZV9wYWdlX3VybCI6IiIsInR3aXR0ZXJfY2FyZF9zaXRlIjoiIiwic29jaWFsX3NoYXJlX2RlZmF1bHRfaW1hZ2UiOnsidXJsIjoiIiwiaWQiOiIiLCJoZWlnaHQiOiIiLCJ3aWR0aCI6IiIsInRodW1ibmFpbCI6IiJ9LCJyZW1vdmVfcGFyYW1ldGVyc19mcm9tX3N0YXRpY19yZXMiOiIxIiwiY3VzdG9tX2NzcyI6IiAgICAgICAgICAgICAgICAgICAgICAgIC5zaG9wLW1lbnUtaXRlbSwgLndvb2NvbW1lcmNlIC5tZW51LWl0ZW0tMjM1IHsgZGlzcGxheTogbm9uZSAhaW1wb3J0YW50OyB9XHJcbi53b29jb21tZXJjZS1wYWdlIC5zaG9wLW1lbnUtaXRlbSB7IGRpc3BsYXk6IGlubGluZS1ibG9jayAhaW1wb3J0YW50OyB9XHJcblxyXG4uaW5wdXQtZ3JvdXAgeyBtYXgtd2lkdGg6IDI1MHB4OyB9XHJcbi5mb290ZXItd2lkZ2V0LWFyZWEgLnNpZGViYXIgeyB0ZXh0LWFsaWduOiBjZW50ZXI7IH0gICAgICAgICAgICAgICAgICAgICIsImluamVjdF9jdXN0b21fY3NzIjoiaW5saW5lIiwiY3VzdG9tX2pzIjoiICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAiLCJjdXN0b21fanNfZm9vdGVyIjoiICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAiLCJ0aGVtZWZvcmVzdF91cGdyYWRlIjoiMSIsIm1hcmtldHBsYWNlX3VzZXJuYW1lIjoiIiwibWFya2V0cGxhY2VfYXBpX2tleSI6IiIsInRoZW1lZm9yZXN0X3VwZ3JhZGVfYmFja3VwIjoiMCIsImFkbWluX3BhbmVsX29wdGlvbnMiOiIxIiwiZW5hYmxlX3dvb2NvbW1lcmNlX3N1cHBvcnQiOiIxIiwic2hvd19jYXJ0X21lbnUiOiIxIiwiY3VzdG9taXplcl9yZXNldF9idXR0b25fc2VjdGlvbiI6IlRlc3QiLCJyZWR1eC1iYWNrdXAiOiIxIn0=";

//The export of the widgets using this plugin http://wordpress.org/plugins/widget-settings-importexport/ - base64 encoded: http://www.base64encode.org/
$demo_widgets = 'W3sid3BfaW5hY3RpdmVfd2lkZ2V0cyI6WyJ0ZXh0LTIiLCJ0ZXh0LTQiXSwic2lkZWJhci1tYWluIjpbInNlYXJjaC0yIiwicmVjZW50LXBvc3RzLTIiLCJyZWNlbnQtY29tbWVudHMtMiIsImFyY2hpdmVzLTIiLCJjYXRlZ29yaWVzLTIiLCJtZXRhLTIiXSwic2lkZWJhci1mb290ZXIiOlsidGV4dC02Iiwid3BncmFkZV9zb2NpYWxfbGlua3MtMiJdfSx7IiI6eyJjdGlvbiI6bnVsbCwiX211bHRpd2lkZ2V0IjpudWxsLCJ3cG5vbmNlIjpudWxsLCJ3cF9odHRwX3JlZmVyZXIiOm51bGx9LCJzZWFyY2giOnsiMiI6eyJ0aXRsZSI6IiJ9LCJfbXVsdGl3aWRnZXQiOjF9LCJyZWNlbnQtcG9zdHMiOnsiMiI6eyJ0aXRsZSI6IiIsIm51bWJlciI6NX0sIl9tdWx0aXdpZGdldCI6MX0sInJlY2VudC1jb21tZW50cyI6eyIyIjp7InRpdGxlIjoiIiwibnVtYmVyIjo1fSwiX211bHRpd2lkZ2V0IjoxfSwiYXJjaGl2ZXMiOnsiMiI6eyJ0aXRsZSI6IiIsImNvdW50IjowLCJkcm9wZG93biI6MH0sIl9tdWx0aXdpZGdldCI6MX0sImNhdGVnb3JpZXMiOnsiMiI6eyJ0aXRsZSI6IiIsImNvdW50IjowLCJoaWVyYXJjaGljYWwiOjAsImRyb3Bkb3duIjowfSwiX211bHRpd2lkZ2V0IjoxfSwibWV0YSI6eyIyIjp7InRpdGxlIjoiIn0sIl9tdWx0aXdpZGdldCI6MX0sInRleHQiOnsiNiI6eyJ0aXRsZSI6IkFib3V0IFJvc2EiLCJ0ZXh0IjoiW2hyIHR5cGU9XCJmbG93ZXJcIl1cclxuUk9TQSBpcyBhbiBlbmNoYW50aW5nIGFuZCBlYXN5LXRvLXVzZSBwYXJhbGxheCBSZXN0YXVyYW50IFdvcmRQcmVzcyB0aGVtZSB0aGF0IGFsbG93cyB5b3UgdG8gdGVsbCB5b3VyIHN0b3J5IGluIGEgZHluYW1pYywgbmFycmF0aXZlIGFuZCBlbmpveWFibGUgd2F5LCBtYWtpbmcgaXQgcGVyZmVjdCBmb3IgcmVzdGF1cmFudHMsIGJha2VyaWVzLCBiYXJzIG9yIGNvZmZlZSBzaG9wcy4gIiwiZmlsdGVyIjpmYWxzZSwiY2xhc3NlcyI6InR3by10aGlyZHMgY2VudGVyZWQiLCJpZHMiOm51bGx9LCIyIjp7InRpdGxlIjoiTG9jYXRpb25zIiwidGV4dCI6Iltyb3cgY29sc19ucj1cIjNcIl1cclxuW2NvbCBzaXplPVwiNFwiXVxyXG4zNzYgVmFuIEJydW50IFN0XHJcbkJyb29rbHluLCBOWSBcdTIwMTQgMTEyMzFcclxuW1wvY29sXVxyXG5bY29sIHNpemU9XCI0XCJdXHJcblxyXG5bXC9jb2xdXHJcbltjb2wgc2l6ZT1cIjRcIl1cclxuW1wvY29sXVxyXG5bXC9yb3ddIiwiZmlsdGVyIjpmYWxzZX0sIjQiOnsidGl0bGUiOiJIb3VycyIsInRleHQiOiJbcm93IGNvbHNfbnI9XCIzXCIgdGhpY2tfZ3V0dGVyPVwib25cIl1cclxuW2NvbCBzaXplPVwiNFwiXVxyXG5Nb25kYXkgLSBUaHVyc2RheVxyXG41OjMwcG0gLSAxMDowMHBtXHJcbltcL2NvbF1cclxuW2NvbCBzaXplPVwiNFwiXVxyXG5GcmlkYXkgJiBTYXR1cmRheVxyXG41OjMwcG0gLSAxMTowMHBtXHJcbltcL2NvbF1cclxuW2NvbCBzaXplPVwiNFwiXVxyXG5BdmFpbGFibGUgZm9yIHByaXZhdGUgZXZlbnRzIG9uIFN1bmRheVxyXG5bXC9jb2xdXHJcbltcL3Jvd10iLCJmaWx0ZXIiOmZhbHNlfSwiX211bHRpd2lkZ2V0IjoxfSwid3BncmFkZV9zb2NpYWxfbGlua3MiOnsiMiI6eyJ0aXRsZSI6IkZvbGxvdyBBbG9uZyIsImNsYXNzZXMiOiJvbmUtaGFsZiBjZW50ZXJlZCIsImlkcyI6bnVsbH0sIl9tdWx0aXdpZGdldCI6MX19XQ==';