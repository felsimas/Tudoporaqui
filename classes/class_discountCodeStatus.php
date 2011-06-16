<?



	# ----------------------------------------------------------------------------------------------------
	# * FILE: /classes/class_discountCodeStatus.php
	# ----------------------------------------------------------------------------------------------------

	class DiscountCodeStatus {

		##################################################
		# PRIVATE
		##################################################

		var $default;
		var $value;
		var $name;
		var $style;

		function DiscountCodeStatus() {
            $this->default = "S";
            $this->value = Array("A", "S", "E");
            $this->name = Array(system_showText(LANG_LABEL_ACTIVE), system_showText(LANG_LABEL_SUSPENDED), system_showText(LANG_LABEL_EXPIRED));
            $this->style = Array("status-active", "status-suspended", "status-expired");
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
