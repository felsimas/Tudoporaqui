<?

	class InvoiceStatus {

		##################################################
		# PRIVATE
		##################################################

		var $default;
		var $value;
		var $name;
		var $style;

		function InvoiceStatus() {
			$this->default = "N"; // None
			$this->value = Array("R", "E", "P", "S");
			$this->name = Array(system_showText(LANG_LABEL_RECEIVED), system_showText(LANG_LABEL_EXPIRED), system_showText(LANG_LABEL_PENDING), system_showText(LANG_LABEL_SUSPENDED));
			$this->style = Array("status-active", "status-expired", "status-pending", "status-deactive");
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

	}

?>