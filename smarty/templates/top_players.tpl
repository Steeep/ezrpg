{include file="header.tpl" TITLE="TopPlayers"}

<table width="90%">
  <tr>
    <th style="text-align: left;">Username</th>
    <th style="text-align: left;">Level</th>
  </tr>

{foreach from=$top_players item=top_player}
  <tr>
    <td>{$top_player->username}</td>
    <td>{$top_player->level}</td>
  </tr>
{/foreach}
</table>

<span class="space"></span>

{include file="footer.tpl"}