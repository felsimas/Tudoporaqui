<?



	# ----------------------------------------------------------------------------------------------------
	# * FILE: /classes/class_importStatus.php
	# ----------------------------------------------------------------------------------------------------

	class ImportStatus {

		##################################################
		# PRIVATE
		##################################################

		var $default;
		var $value;
		var $name;
		var $style;

		function ImportStatus() {
			$this->default = "P";
			$this->value = Array("P", "R", "W", "S", "D", "F", "C");
			$this->name = Array(system_showText(LANG_LABEL_PENDING), system_showText(LANG_SITEMGR_IMPORT_RUNNING), system_showText(LANG_SITEMGR_IMPORT_WAIT)."...", system_showText(LANG_SITEMGR_IMPORT_STOPPED), system_showText(LANG_SITEMGR_IMPORT_DELETED), system_showText(LANG_SITEMGR_IMPORT_FINISHED), system_showText(LANG_SITEMGR_IMPORT_CANCELLED));
			$this->style = Array("status-pending", "status-running", "status-wait", "status-stopped", "status-deleted", "status-finished", "status-cancelled");
		}

		function getValues() {
			return $this->value;
		}

		function getNames() {
			return $this->name;
		}

		function getStyles() {
			return $this->style;
		}

		function union($key, $value) {
			for ($i=0; $i<count($key); $i++) {
				$aux[$key[$i]] = $value[$i];
			}
			return $aux;
		}

		function getValueName() {
			return $this->union($this->getValues(), $this->getNames());
		}

		function getValueStyle() {
			return $this->union($this->getValues(), $this->getStyles());
		}

		function getDefault() {
			return $this->default;
		}

		function getName($value) {
			$value_name = $this->getValueName();
			return $value_name[$value];
		}

		function getStyle($value) {
			$value_style = $this->getValueStyle();
			return $value_style[$value];
		}

		##################################################
		# PRIVATE
		##################################################

		##################################################
		# PUBLIC
		##################################################

		function getStatus($value) {
			if ($this->getName($value)) return ucwords($this->getName($value));
			else return ucwords($this->getStatus($this->getDefaultStatus()));
		}

		function getStatusWithStyle($value) {
			if ($this->getName($value)) {
				return "<span class=".$this->getStyle($value).">".ucwords($this->getName($value))."</span>";
			}
			return ucwords($this->getStatusWithStyle($this->getDefaultStatus()));
		}

		function getDefaultStatus() {
			return $this->getDefault();
		}

		function getStatusValues() {
			return $this->getValues();
		}

		function getStatusNames() {
			return $this->getNames();
		}

		##################################################
		# PUBLIC
		##################################################

	}

?>
