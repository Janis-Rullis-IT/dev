# Log

```ex
defmodule My.Log do

  @log_directory "storage/"
  @allowed_types ["post", "contact"]

  @spec create(type :: String.t(), data :: String.t(), description :: String.t()) :: integer()
    def create(type, data, description) when type in @allowed_types do

    # Do nothing if the same kind of log was created recently.
    timeout = 60 * 5
    datetime = DateTime.utc_now()
    timestamp = datetime |> DateTime.to_unix()

    # Read the UNIX timestamp (time in seconds) when was the last time the log was created.
    timestamp_last_path = "#{@log_directory}#{type}_last_timestamp.log"
    timestamp_last = if File.exists?(timestamp_last_path) do
      File.read!(timestamp_last_path)
    else
      0
    end

    # Check if the same kind of log was created recentlt.
    if timestamp_last > timestamp - timeout do
      0
    # The timeout has elapsed.
    else

      # Write to a file with a filename in this manner "2019-03-15-12-15_post.log".
      datetime_str = "#{datetime.year}-#{datetime.month}-#{datetime.day}_#{datetime.hour}-#{datetime.minute}"
      log_path = "#{@log_directory}/#{datetime_str}_#{type}.log"
      log_content = "#{datetime_str} #{description} #{data}"
      File.write(log_path, log_content, [:binary])

      # Make next request, from the same kind, to wait for a few minutes.
      File.write(timestamp_last_path, "#{timestamp}", [:binary])
      1
    end
  end
end
```