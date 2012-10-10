<?php
//This file cannot be viewed, it must be included
defined('IN_EZRPG') or exit;

/*
  Class: Module_TopPlayers
  Shows a list of a top players.
*/
class Module_TopPlayers extends Base_Module
{
    /*
      Function: start
      Displays the top players list page.
    */
    public function start()
    {
		//Require login
		requireLogin();
		
		$query = $this->db->execute('SELECT `username`, `level` FROM `<ezrpg>players` ORDER BY `level` DESC LIMIT 0,10');
        $top_players = $this->db->fetchAll($query);

		$this->tpl->assign('top_players', $top_players);
		$this->tpl->display('top_players.tpl');
	}
}

?>