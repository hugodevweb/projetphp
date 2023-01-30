
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    *{font-family: 'Montserrat', sans-serif;}
</style>

<ul style="font-family: 'Montserrat', sans-serif;">
<li>From: @{{2.mappable_column_values.multiple_person.text}}</li>
<li>Board:<b>{{2.mappable_column_values.dropdown.text}}</b></li>
<li>Type:<b>{{2.mappable_column_values.dropdown4.text}}</b></li>
<li>+ Info:{{2.mappable_column_values.long_text.text}}</li>
<li>Link of the Item:{{2.mappable_column_values.link.url}}</li>
<li>Priority:{{if(2.mappable_column_values.color.text = "MAJOR !!!!!"; "<b style=""color:red"">" + 2.mappable_column_values.color.text + "</b>"; if(2.mappable_column_values.color.text = "Medium"; "<b style=""color:orange"">" + 2.mappable_column_values.color.text + "</b>"; "<b style=""color:green"">" + 2.mappable_column_values.color.text + "</b>"))}}</li>
<li>Deadline:{{2.mappable_column_values.date.text}}</li>
</ul>