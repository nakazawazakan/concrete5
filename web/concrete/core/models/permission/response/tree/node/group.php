<?
defined('C5_EXECUTE') or die("Access Denied.");
class Concrete5_Model_GroupTreeNodePermissionResponse extends TreeNodePermissionResponse {

	public function canEditTreeNodePermissions() {
		return $this->validate('edit_group_permissions');
	}

	public function canViewTreeNode() {
		$c = Page::getByPath('/dashboard/users/groups');
		$cp = new Permissions($c);
		return $cp->canViewPage();
	}

	public function canDuplicateTreeNode() {
		return false;
	}

	public function canEditTreeNode() {
		return $this->validate('edit_group');
	}

	public function canAddTreeSubNode() {
		return $this->validate('add_sub_group');
	}

	public function canDeleteTreeNode() {
		return false;
	}

}