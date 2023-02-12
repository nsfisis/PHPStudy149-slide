if [[ ! "$(php catchline.php)" = "#PHP" ]]; then
    echo Catchline >&2
    exit 1
fi

echo okay
