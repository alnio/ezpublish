{*?template charset=latin1?*}
{include uri='design:setup/setup_header.tpl' setup=$setup}

<div align="center">
  <h1>{"Choose database system"|i18n("design/standard/setup/init")}</h1>
</div>

<p>
 {"We detected both MySQL and PostgreSQL support on your system. Which database system would you like to use?"|i18n("design/standard/setup/init")}
</p>

<form method="post" action="{$script}">

<table border="0" cellspacing="0" cellpadding="0">
<tr>
  <th class="normal" colspan="3">Database:</th>
</tr>
{section name=DB loop=$database_list}
<tr>
  <td class="normal">{$:item.name}</td>
  <td rowspan="1" class="normal">&nbsp;&nbsp;</td>
  <td class="normal" rowspan="1" valign="top">
  <input type="radio" name="eZSetupDatabaseType" value="{$:item.type}" {section show=eq($:number,1)}checked="checked" {/section}/>
  </td>
</tr>
{/section}
</table>


    <div class="buttonblock">
      <input class="defaultbutton" type="submit" name="StepButton" value="{"Next"|i18n("design/standard/setup/init", "next button in installation")} &gt;&gt;" />
    </div>
    {include uri="design:setup/init/steps.tpl"}
    {include uri='design:setup/persistence.tpl'}
  </form>
