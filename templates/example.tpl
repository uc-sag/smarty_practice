{config_load file='foo.conf'}

<html>
<head>
{*Variables loaded from config files*}

<title>{#pageTitle#}</title>
</head>

{* <body bgcolor="{#bodyBgColor#}"> *}
{*$smarty.config method*}
<body bgcolor="{$smarty.config.bodyBgColor}">


{*Header file  *}
{include file = 'header.tpl'}

<h1>{$age}</h1>
<h1>{$name}</h1>

{*  Comments  ***************************}

{* this is a single line comment *}

{*
   Multiline commment
*}
{*
<select name="company">
  {html_options options=$val selected=$selected_id}
</select>
*}

{*  Variables *******************************}
{$foo}

{$data['name']}
{$data.address}


{$arr[2]}
 <br>
{* if else condition    Function *}

{if $logged_in}
  Welcome, Sagar
{else}
  Please login 
{/if}

{* Attributes *}
{mailto address="sagar@example.com"}

{*Embedding vars in double quotes*}

{*Math*}
{$value * 2}
{($value + 5 )/ 2}

{*Escaping Smarty Parsing*}
<script>
   // the following braces are ignored by Smarty
   // since they are surrounded by whitespace
   function foobar { 
    alert('foobar!');
   }
  
</script>

{***********************************Variables*****************************}
{*Associative array*}
{$Contacts.email}
<br>
{$Contacts.phone.cell}

{*Variales scope*}


{*Reserved variables*}

{* use the date_format modifier to show current date and time *}
{$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}


{*PHP constants variables*}
{$smarty.const.MY_CONST_VAL}

<br>
{*Used for printing left and right delimiters*}
{ldelim}{rdelim}
<br>
{*Variable modifiers*}
{$articleTitle}
{$articleTitle|capitalize}
{$articleTitle|capitalize:true}

<br>
{*Cat*}
{$articleTitle|cat : 'yesterday'}
 <br>

{*count_characters*}
{$articleTitle|count_characters}

<br>
{$para|count_paragraphs}

<br>
{*Date format*}
{$smarty.now|date_format} 
<br>
{$smarty.now|date_format:"%D"}
<br>
{$smarty.now|date_format:$config.date}
<br>
{$yesterday|date_format}
<br>
{$yesterday|date_format:"%A, %B %e, %Y"}
<br>
{$yesterday|date_format:$config.time}
<br>
{$articleTitle2 }
{$articleTitle2|regex_replace:"/[\r\t\n]/":" "}


<br>
<br>
{$articleTitle|replace:'delayed':'Vineyard'}
<br>
{$number}
{$number|string_format:"%.2f"}
{$number|string_format:"%d"}



</body>
</html>